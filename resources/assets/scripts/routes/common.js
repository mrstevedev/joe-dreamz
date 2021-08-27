export default {
  init() {
    // JavaScript to be fired on all pages
    const notification = document.querySelector('.cookie__notification');
    const acceptBtn = document.querySelector('.cookie__notification--accept');
    // const declineBtn = document.querySelector('.cookie__notification--decline');

    acceptBtn.addEventListener('click', () => {
      document.cookie =
      'CookieNotificationShown=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';

      notification.style.display = 'none';
    });

    //if cookie hasn't been set...
    if (document.cookie.indexOf('CookieNotificationShown') < 0) {
      setTimeout(() => {
        console.log('no cookie found')
        notification.style.display = 'block';
      }, 5400);

      acceptBtn.addEventListener('click', () => {
        console.log('accept button clicked');
  
        // Store cookie
        document.cookie =
          'CookieNotificationShown=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';
      });
    } else {
      notification.style.display = 'none';
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
