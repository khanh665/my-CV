/**
 * CV Online Scripts
 */
document.addEventListener('DOMContentLoaded', function () {
    console.log('CV Online đã sẵn sàng.');

    // Phím tắt Ctrl+P / Command+P hỗ trợ in nhanh
    document.addEventListener('keydown', function (e) {
        if ((e.ctrlKey || e.metaKey) && e.key === 'p') {
            // Cho phép hành vi in ấn mặc định của trình duyệt với CSS @media print
        }
    });
});
