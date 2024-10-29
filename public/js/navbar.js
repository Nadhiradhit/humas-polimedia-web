let activeDetails = null;
function toggleDetails(event) {
    if (activeDetails && activeDetails !== event.currentTarget) {
        activeDetails.removeAttribute("open");
    }

    activeDetails = event.currentTarget.hasAttribute("open")
        ? null
        : event.currentTarget;
}
