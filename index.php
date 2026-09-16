<?php
require_once __DIR__ . '/header.php';
?>

<!-- Thanh công cụ phía trên (Ẩn khi in ấn) -->
<div class="top-action-bar text-center my-3 no-print">
    <button class="btn btn-cv-action me-2" onclick="window.print()">
        <i class="fas fa-file-pdf me-1"></i> In CV / Lưu PDF
        <i class="fas fa-download ms-2"></i>
    </button>
    <a class="btn btn-cv-action" href="images/avatar.png" target="_blank" download="avatar.png">
        <i class="fas fa-image me-1"></i> Tải ảnh đại diện
        <i class="fas fa-download ms-2"></i>
    </a>
</div>

<!-- Khung chứa CV chính -->
<div class="cv-wrapper">
    <div class="cv-paper shadow-sm">
        
        <!-- PHẦN 1: HEADER TRÊN CÙNG (AVATAR & BẢN TÓM TẮT) -->
        <div class="cv-top-header">
            <div class="row g-0 align-items-center">
                <!-- Avatar bên trái -->
                <div class="col-md-3 col-12 text-center py-3">
                    <div class="person-cover">
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
            
            <!-- CỘT TRÁI (SIDEBAR MÀU TỐI) -->
            <div class="col-md-4 col-12 cv-sidebar">
                
                <!-- Mục Liên hệ (Nền xám #5f5f5f) -->
                <div class="sidebar-block block-contacts">
                    <h3 class="sidebar-heading">Liên hệ</h3>
                    <ul class="contact-list">
                        <?php foreach ($cv['contacts'] as $contact): ?>
                            <li>
                                <div class="contact-icon">
                                    <i class="<?= htmlspecialchars($contact['icon']) ?>"></i>
                                </div>
                                <div class="contact-value">
                                    <?php if (!empty($contact['link'])): ?>
                                        <a href="<?= htmlspecialchars($contact['link']) ?>">
                                            <?= htmlspecialchars($contact['value']) ?>
                                        </a>
                                    <?php else: ?>
                                        <span><?= htmlspecialchars($contact['value']) ?></span>
                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Mục Ngôn ngữ (Nền xám đậm #404040) -->
                <div class="sidebar-block block-languages">
                    <h3 class="sidebar-heading">Ngôn ngữ</h3>
                    <ul class="simple-list">
                        <?php foreach ($cv['languages'] as $lang): ?>
                            <li>- <?= htmlspecialchars($lang) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Mục Kỹ năng chuyên môn (Nền đen #222323) -->
                <div class="sidebar-block block-tech-skills">
                    <h3 class="sidebar-heading">Kỹ năng chuyên môn</h3>
                    <ul class="simple-list">
                        <?php foreach ($cv['technical_skills'] as $skill): ?>
                            <li>- <?= htmlspecialchars($skill) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Mục Kỹ năng mềm (Nền đen #222323) -->
                <div class="sidebar-block block-soft-skills">
                    <h3 class="sidebar-heading">Kỹ năng mềm</h3>
                    <ul class="simple-list">
                        <?php foreach ($cv['soft_skills'] as $soft): ?>
                            <li>- <?= htmlspecialchars($soft) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>

            <!-- CỘT PHẢI (NỘI DUNG CHÍNH NỀN TRẮNG) -->
            <div class="col-md-8 col-12 cv-main-content">
                
                <!-- KINH NGHIỆM / DỰ ÁN -->
                <section class="main-section">
                    <div class="section-heading">
                        <i class="fas fa-briefcase"></i> Kinh nghiệm / Dự án
                    </div>

                    <?php foreach ($cv['experience'] as $exp): ?>
                        <div class="job-item">
                            <div class="job-title">
                                <?= htmlspecialchars($exp['position']) ?>
                            </div>
                            <div class="job-meta d-flex flex-wrap justify-content-between align-items-center mb-2">
                                <span class="company-name"><?= htmlspecialchars($exp['company']) ?></span>
                                <span class="job-date"><?= htmlspecialchars($exp['time']) ?></span>
                            </div>
                            <div class="job-details">
                                <?php foreach ($exp['details'] as $paragraph): ?>
                                    <p class="detail-paragraph"><?= htmlspecialchars($paragraph) ?></p>
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
                        <div class="job-item">
                            <div class="job-title">
                                <?= htmlspecialchars($edu['major']) ?>
                            </div>
                            <div class="job-meta d-flex flex-wrap justify-content-between align-items-center mb-2">
                                <span class="company-name"><?= htmlspecialchars($edu['school']) ?></span>
                                <span class="job-date"><?= htmlspecialchars($edu['time']) ?></span>
                            </div>
                            <div class="job-details">
                                <p class="gpa-text fw-bold text-dark mb-2"><?= htmlspecialchars($edu['gpa']) ?></p>
                                
                                <div class="course-group mb-2">
                                    <span class="course-heading fw-bold">Các môn chuyên ngành nổi bật:</span>
                                    <ul class="course-list">
                                        <?php foreach ($edu['specialized_courses'] as $course): ?>
                                            <li><?= htmlspecialchars($course) ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <div class="course-group">
                                    <span class="course-heading fw-bold">Các môn nền tảng:</span>
                                    <ul class="course-list">
                                        <?php foreach ($edu['foundational_courses'] as $course): ?>
                                            <li><?= htmlspecialchars($course) ?></li>
                                        <?php endforeach; ?>
                                    </ul>
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
                                    <i class="fas fa-check-circle me-1 text-primary"></i>
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
