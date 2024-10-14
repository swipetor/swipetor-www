//region .non-touch
// Set touch support .nonTouch css class to html element if browser doesn't support touch
let isTouchDevice = true;
const touchSupport =
  "ontouchstart" in window ||
  navigator.maxTouchPoints > 0 ||
  navigator.msMaxTouchPoints > 0;
if (!touchSupport) {
  // browser doesn't support touch
  document.documentElement.className += " nonTouch";
  isTouchDevice = false;
}
//endregion

/**
 * Inserts the email into elements with css class email
 */
function insertEmailIntoHtmlElements() {
  const emails = document.getElementsByClassName("email");
  const addr = email_local + "@" + email_domain;
  for (let email of emails) {
    email.innerHTML =
      "<a href='mailto:" + addr + "' class='emailAddress'>" + addr + "</a>";
  }
}

/**
 * Anchor links are used in Table of Contents of Markdown pages and posts.
 * This helps us to scroll to a given element, smoothly, also taking the header height into consideration.
 */
function setUpAnchorLinksSmoothScrolling() {
  const anchorLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');

  anchorLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
      event.preventDefault(); // Stop the default anchor behavior

      const targetId = this.getAttribute("href"); // e.g., "#heading"
      const targetElement = document.querySelector(targetId);

      if (targetElement) {
        const rect = targetElement.getBoundingClientRect();
        const absoluteTop =
          window.pageYOffset +
          rect.top -
          document.querySelector("#header").scrollHeight;

        window.scrollTo({
          top: absoluteTop,
          behavior: "smooth", // Smooth scrolling
        });
      }
    });
  });
}

window.addEventListener("load", function () {
  insertEmailIntoHtmlElements();
});

// When less.js finishes loading, call setBodyWrapperMarginTop() to get a correct margin.
// In production this has no effect as less.js is only used in development.
if (typeof less !== "undefined" && less.pageLoadFinished) {
  less.pageLoadFinished.then(function () {});
}
//endregion
