<?php
/**
 * Dữ liệu CV Online
 * Dễ dàng tùy chỉnh và bổ sung thông tin tại đây
 */

$cv = [
    // Thông tin cơ bản
    'name' => 'Và Ngọc Khánh',
    'title' => 'Sinh viên công nghệ thông tin',
    'avatar' => 'images/avatar.png',
    
    // Bản tóm tắt (Summary)
    'summary' => 'Sinh viên năm cuối ngành CNTT đam mê phát triển hệ thống web, có kỹ năng thực hành tốt với PHP, JavaScript và cơ sở dữ liệu MySQL. Mục tiêu trở thành Thực tập sinh Lập trình để đóng góp vào việc xây dựng, tối ưu hóa các tính năng phần mềm thực tế và tìm kiếm cơ hội thực tập phát triển web để đồng hành cùng các dự án của doanh nghiệp, tối ưu hóa sản phẩm và trau dồi kỹ năng lập trình chuyên sâu, phát triển bản thân thành kỹ sư phần mềm vững tay nghề.',

    // Thông tin liên hệ (Contacts)
    'contacts' => [
        [
            'icon' => 'fas fa-phone-alt',
            'label' => 'Số điện thoại',
            'value' => '0385941772',
            'link' => 'tel:0385941772'
        ],
        [
            'icon' => 'fas fa-envelope-open-text',
            'label' => 'Email',
            'value' => 'khanhva92@gmail.com',
            'link' => 'mailto:khanhva92@gmail.com'
        ],
        [
            'icon' => 'fas fa-map-marker-alt',
            'label' => 'Địa chỉ',
            'value' => 'Sơn La',
            'link' => null
        ],
        [
            'icon' => 'far fa-calendar-alt',
            'label' => 'Ngày sinh',
            'value' => '2005-06-06',
            'link' => null
        ],
        [
            'icon' => 'fas fa-globe-americas',
            'label' => 'Quốc gia',
            'value' => 'Việt Nam',
            'link' => null
        ]
    ],

    // Ngôn ngữ (Languages)
    'languages' => [
        'Tiếng Việt',
        'Tiếng Anh - Cơ bản / Giao tiếp cơ bản',
        'Tiếng Mông'
    ],

    // Kỹ năng chuyên môn (Technical Skills)
    'technical_skills' => [
        'Ngôn ngữ lập trình: PHP, JavaScript, C#, Java, C/C++',
        'Phát triển Web & Frontend: HTML5, CSS3, Bootstrap, Thiết kế Web tương thích (Responsive Design)',
        'Cơ sở dữ liệu: MySQL, SQL Server (Thiết kế bảng, viết truy vấn, tối ưu hóa CSDL)',
        'Mạng: TCP/IP',
        'Mạng & Hệ thống: GitHub, XAMPP, Visual Studio Code'
    ],

    // Kỹ năng mềm (Soft Skills)
    'soft_skills' => [
        'Làm việc nhóm',
        'Sáng tạo',
        'Khả năng thích ứng',
        'Quản lý thời gian'
    ],

    // Kinh nghiệm / Dự án (Work Experience)
    'experience' => [
        [
            'position' => 'Lập trình viên Web (Full-stack)',
            'company' => 'Dự án cá nhân - Website Bán Nông Sản Sơn La',
            'time' => '2025-08 : 2026-09',
            'details' => [
                'Thiết kế và phát triển website thương mại điện tử chuyên giới thiệu, tiêu thụ nông sản và đặc sản Sơn La (mận hậu Mộc Châu, xoài Yên Châu, nhãn Sông Mã, chè, thịt gác bếp,...).',
                'Phân tích, chuẩn hóa cơ sở dữ liệu quan hệ (MySQL) quản lý danh mục đặc sản theo mùa vụ, dữ liệu người dùng và đơn đặt hàng.',
                'Xây dựng các chức năng cốt lõi: tìm kiếm, lọc nông sản theo phân loại/giá, giỏ hàng trực tuyến và trang quản trị (Admin Dashboard) theo dõi đơn hàng, quản lý kho.',
                'Triển khai bảo mật hệ thống: sử dụng PHP Data Objects (PDO) với Prepared Statements để ngăn chặn triệt để lỗ hổng SQL Injection; áp dụng cơ chế băm mật khẩu an toàn (Bcrypt/Argon2) và xác thực, phân quyền người dùng qua JWT (JSON Web Tokens) / Session bảo mật.',
                'Thiết kế giao diện Responsive tương thích mượt mà trên cả máy tính và thiết bị di động.',
                'Công nghệ sử dụng: PHP, MySQL, JavaScript, HTML5, CSS3, Bootstrap, XAMPP, PDO, JWT.'
            ]
        ]
    ],

    // Học vấn (Educations)
    'education' => [
        [
            'major' => 'Khoa học tự nhiên - Công nghệ',
            'school' => 'Trường Đại học Tây Bắc',
            'time' => '2023-08 : 2027-08',
            'gpa' => 'GPA: 2.89/4.0 (7.52/10) – Xếp loại Khá',
            'specialized_courses' => [
                'Lập trình ứng dụng Web',
                'Hệ quản trị Cơ sở dữ liệu',
                'Lập trình mạng',
                'Nguyên lý hệ điều hành',
                'Hệ điều hành Linux',
                'Thương mại điện tử'
            ],
            'foundational_courses' => [
                'Cấu trúc dữ liệu & Giải thuật',
                'Thiết kế Web',
                'Cơ sở dữ liệu',
                'Lập trình hướng đối tượng (OOP)',
                'Lập trình .NET',
                'Lập trình di động',
                'Trí tuệ nhân tạo'
            ]
        ]
    ],

    // Sở thích (Interests)
    'interests' => [
        'Nghe nhạc',
        'Thể thao',
        'Tìm hiểu công nghệ mới, khám phá các công cụ hỗ trợ lập trình'
    ]
];
