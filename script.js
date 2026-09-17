/**
 * CV Online Scripts (Vanilla JavaScript)
 * Tinh gọn, không phụ thuộc thư viện ngoài, tải tức thì
 */

document.addEventListener('DOMContentLoaded', function () {
    console.log('CV Online đã sẵn sàng.');

    // Xử lý phím tắt Ctrl+P / Command+P
    document.addEventListener('keydown', function (e) {
        if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === 'p') {
            // Cho phép in mặc định sạch sẽ theo CSS @media print
        }
    });
});

let toastTimer = null;

/**
 * Hàm sao chép văn bản vào bộ nhớ tạm kèm Toast thông báo nhỏ
 * @param {string} text - Nội dung cần chép
 * @param {string} message - Lời nhắn hiển thị trên Toast
 */
function copyText(text, message) {
    if (!text) return;

    // Sử dụng Clipboard API hiện đại
    if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(text).then(function () {
            showToast(message || 'Đã sao chép thành công!');
        }).catch(function () {
            fallbackCopy(text, message);
        });
    } else {
        fallbackCopy(text, message);
    }
}

/**
 * Cơ chế dự phòng sao chép cho các trình duyệt cũ hoặc môi trường http
 */
function fallbackCopy(text, message) {
    const textArea = document.createElement('textarea');
    textArea.value = text;
    textArea.style.position = 'fixed';
    textArea.style.left = '-999999px';
    textArea.style.top = '-999999px';
    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();

    try {
        const successful = document.execCommand('copy');
        if (successful) {
            showToast(message || 'Đã sao chép thành công!');
        }
    } catch (err) {
        console.error('Không thể sao chép:', err);
    }

    document.body.removeChild(textArea);
}

/**
 * Hiển thị Toast thông báo trạng thái
 */
function showToast(msg) {
    const toast = document.getElementById('copyToast');
    const toastMsg = document.getElementById('toastMsg');

    if (!toast || !toastMsg) return;

    toastMsg.textContent = msg;
    toast.classList.add('show');

    if (toastTimer) {
        clearTimeout(toastTimer);
    }

    toastTimer = setTimeout(function () {
        toast.classList.remove('show');
    }, 2400);
}
