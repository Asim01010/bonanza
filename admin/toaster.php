<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1100">
    <div id="liveToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body" id="toastMessage">Success message here</div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
</div>

<script>
function showToast(message, type = 'success') {
    let toastEl = document.getElementById("liveToast");
    let toastBody = document.getElementById("toastMessage");

    // update message
    toastBody.innerText = message;

    // update color
    toastEl.className = "toast align-items-center text-bg-" + type + " border-0";

    // show toast
    let toast = new bootstrap.Toast(toastEl, {
        delay: 3000
    });
    toast.show();
}
</script>