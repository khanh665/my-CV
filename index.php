<?php
require_once __DIR__ . '/header.php';
?>

<!-- Thanh công cụ phía trên (Ẩn hoàn toàn khi in ấn) -->
<div class="top-action-bar text-center my-3 no-print">
    <div class="action-bar-inner">
        <button class="btn btn-cv-action btn-cv-primary" onclick="window.print()" title="In hoặc lưu file PDF khổ A4">
            <i class="fas fa-file-pdf me-1 text-warning"></i> In CV / Lưu PDF
            <i class="fas fa-download ms-2"></i>
        </button>
        <button class="btn btn-cv-action" onclick="copyText('khanhva92@gmail.com', 'Đã sao chép Email vào bộ nhớ tạm!')" title="Nhấp để chép Email">
            <i class="fas fa-copy me-1 text-primary"></i> Sao chép Email
        </button>
        <a class="btn btn-cv-action" href="images/avatar.png" target="_blank" download="avatar.png" title="Tải ảnh chân dung">
            <i class="fas fa-image me-1 text-secondary"></i> Tải ảnh
        </a>
    </div>
</div>

<!-- Toast thông báo nhỏ gọn khi sao chép -->
<div id="copyToast" class="copy-toast" role="status" aria-live="polite">
    <i class="fas fa-check-circle"></i>
    <span id="toastMsg">Đã sao chép thành công!</span>
</div>

<!-- Khung chứa CV chính -->
<div class="cv-wrapper">
    <div class="cv-paper">
        
        <!-- PHẦN 1: HEADER TRÊN CÙNG (AVATAR & BẢN TÓM TẮT) -->
        <div class="cv-top-header">
            <div class="row g-0 align-items-center">
                <!-- Avatar bên trái -->
                <div class="col-md-3 col-12 text-center py-3">
                    <div class="person-cover" title="Ảnh đại diện">
                        <img src="<?= htmlspecialchars($cv['avatar']) ?>" alt="<?= htmlspecialchars($cv['name']) ?>" class="person-img">
                    </div>
                </div>
                
                <!-- Bản tóm tắt bên phải -->
                <div class="col-md-9 col-12 p-4">
                    <div class="summary-heading">Bản tóm tắt</div>
                    <div class="summary-text mt-2">
                        <?= htmlspecialchars($cv['summary']) ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- PHẦN 2: THANH TÊN & CHỨC DANH (NAME BAR VÀNG - ĐEN) -->
        <div class="name-bar d-flex flex-column flex-md-row align-items-stretch">
            <div class="job-header d-flex align-items-center">
                <?= htmlspecialchars($cv['title']) ?>
            </div>
            <div class="name-box d-flex align-items-center flex-grow-1">
                <span class="name-text"><?= htmlspecialchars($cv['name']) ?></span>
            </div>
        </div>

        <!-- PHẦN 3: THÂN CV CHIA 2 CỘT -->
        <div class="row g-0 cv-body-row">
            
            <!-- CỘT TRÁI (SIDEBAR MÀU TỐI LIỀN MẠCH) -->
            <div class="col-md-4 col-12 cv-sidebar">
                
                <!-- Mục Liên hệ -->
                <div class="sidebar-block">
                    <h3 class="sidebar-heading">Liên hệ</h3>
                    <ul class="contact-list">
                        <?php foreach ($cv['contacts'] as $contact): ?>
                            <?php 
                                $isClickable = !empty($contact['link']) || in_array($contact['label'], ['Số điện thoại', 'Email']);
                                $copyVal = $contact['value'];
                            ?>
                            <li class="contact-item <?= $isClickable ? 'clickable' : '' ?>" 
                                <?php if ($isClickable): ?>
                                    onclick="copyText('<?= htmlspecialchars($copyVal) ?>', 'Đã sao chép <?= htmlspecialchars($contact['label']) ?>!')"
                                    title="Nhấp để sao chép <?= htmlspecialchars($contact['label']) ?>"
                                <?php endif; ?>>
                                <div class="contact-icon">
                                    <i class="<?= htmlspecialchars($contact['icon']) ?>"></i>
                                </div>
                                <div class="contact-value">
                                    <?php if (!empty($contact['link'])): ?>
                                        <a href="<?= htmlspecialchars($contact['link']) ?>" onclick="event.stopPropagation()">
                                            <?= htmlspecialchars($contact['value']) ?>
                                        </a>
                                    <?php else: ?>
                                        <span><?= htmlspecialchars($contact['value']) ?></span>
                                    <?php endif; ?>
                                    <?php if ($isClickable): ?>
                                        <span class="contact-copy-badge"><i class="fas fa-copy"></i></span>
                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Mục Ngôn ngữ -->
                <div class="sidebar-block">
                    <h3 class="sidebar-heading">Ngôn ngữ</h3>
                    <div class="d-flex flex-wrap">
                        <?php foreach ($cv['languages'] as $lang): ?>
                            <span class="soft-skill-chip">
                                <i class="fas fa-check"></i> <?= htmlspecialchars($lang) ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Mục Kỹ năng chuyên môn (Dạng Chip/Badge trung tính) -->
                <div class="sidebar-block">
                    <h3 class="sidebar-heading">Kỹ năng chuyên môn</h3>
                    <?php foreach ($cv['technical_skills'] as $skillItem): ?>
                        <div class="skill-category">
                            <?php 
                                if (strpos($skillItem, ':') !== false) {
                                    list($catLabel, $skillsStr) = explode(':', $skillItem, 2);
                                    $skillsList = array_map('trim', preg_split('/,(?![^(]*\))/', $skillsStr));
                                } else {
                                    $catLabel = '';
                                    $skillsList = [trim($skillItem)];
                                }
                            ?>
                            <?php if (!empty($catLabel)): ?>
                                <span class="skill-cat-label"><?= htmlspecialchars($catLabel) ?>:</span>
                            <?php endif; ?>
                            <div class="skill-badge-container">
                                <?php foreach ($skillsList as $s): ?>
                                    <?php if (!empty($s)): ?>
                                        <span class="skill-chip"><?= htmlspecialchars($s) ?></span>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Mục Kỹ năng mềm -->
                <div class="sidebar-block">
                    <h3 class="sidebar-heading">Kỹ năng mềm</h3>
                    <div class="d-flex flex-wrap">
                        <?php foreach ($cv['soft_skills'] as $soft): ?>
                            <span class="soft-skill-chip">
                                <i class="fas fa-check"></i> <?= htmlspecialchars($soft) ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

            <!-- CỘT PHẢI (NỘI DUNG CHÍNH NỀN TRẮNG) -->
            <div class="col-md-8 col-12 cv-main-content">
                
                <!-- KINH NGHIỆM / DỰ ÁN (Có Timeline Node thanh lịch) -->
                <section class="main-section">
                    <div class="section-heading">
                        <i class="fas fa-briefcase"></i> Kinh nghiệm / Dự án
                    </div>

                    <?php foreach ($cv['experience'] as $exp): ?>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="job-title">
                                <?= htmlspecialchars($exp['position']) ?>
                            </div>
                            <div class="job-meta">
                                <span class="company-name"><?= htmlspecialchars($exp['company']) ?></span>
                                <span class="job-date-badge"><?= htmlspecialchars($exp['time']) ?></span>
                            </div>
                            <div class="job-details">
                                <?php foreach ($exp['details'] as $paragraph): ?>
                                    <?php if (strpos($paragraph, 'Công nghệ sử dụng:') === 0): ?>
                                        <!-- Tách dàn công nghệ thành các badge riêng ở cuối card -->
                                        <div class="project-tech-tags">
                                            <span class="project-tech-label">Công nghệ sử dụng:</span>
                                            <?php 
                                                $techString = trim(str_replace('Công nghệ sử dụng:', '', $paragraph));
                                                $techList = array_map('trim', explode(',', rtrim($techString, '.')));
                                                foreach ($techList as $t):
                                            ?>
                                                <span class="project-tech-badge"><?= htmlspecialchars($t) ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php else: ?>
                                        <p class="detail-paragraph"><?= htmlspecialchars($paragraph) ?></p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </section>

                <hr class="section-divider">

                <!-- HỌC VẤN -->
                <section class="main-section">
                    <div class="section-heading">
                        <i class="fas fa-graduation-cap"></i> Học vấn
                    </div>

                    <?php foreach ($cv['education'] as $edu): ?>
                        <div class="education-box">
                            <div class="job-title">
                                <?= htmlspecialchars($edu['major']) ?>
                            </div>
                            <div class="job-meta">
                                <span class="company-name"><?= htmlspecialchars($edu['school']) ?></span>
                                <span class="job-date-badge"><?= htmlspecialchars($edu['time']) ?></span>
                            </div>
                            <div class="job-details">
                                <div class="gpa-badge">
                                    <i class="fas fa-award me-1"></i> <?= htmlspecialchars($edu['gpa']) ?>
                                </div>
                                
                                <div class="course-group mb-3">
                                    <span class="course-heading fw-bold">Các môn chuyên ngành nổi bật:</span>
                                    <div class="course-tags-container">
                                        <?php foreach ($edu['specialized_courses'] as $course): ?>
                                            <span class="course-tag"><?= htmlspecialchars($course) ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="course-group">
                                    <span class="course-heading fw-bold">Các môn nền tảng:</span>
                                    <div class="course-tags-container">
                                        <?php foreach ($edu['foundational_courses'] as $course): ?>
                                            <span class="course-tag"><?= htmlspecialchars($course) ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </section>

                <hr class="section-divider">

                <!-- SỞ THÍCH -->
                <section class="main-section">
                    <div class="section-heading">
                        <i class="fas fa-stream"></i> Sở thích
                    </div>

                    <div class="interests-grid row g-2">
                        <?php foreach ($cv['interests'] as $interest): ?>
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="interest-card">
                                    <i class="fas fa-check-circle me-2"></i>
                                    <span><?= htmlspecialchars($interest) ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>

            </div>

        </div>

    </div>
</div>

<?php
require_once __DIR__ . '/footer.php';
?>
