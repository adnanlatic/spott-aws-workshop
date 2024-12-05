<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="{{ asset('favicon.ico') }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AWS Workshop</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('loader.css') }}" />
  @vite(['resources/js/main.js'])
</head>

<body>
  <div id="app">
    <div id="loading-bg">
      <div class="loading-logo">
         <!-- SVG Logo -->
         <svg width="100" height="80" viewBox="0 0 100 80" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="100" height="80" />
          <mask id="mask0_78_100113" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="27" y="10" width="35"
            height="63">
            <path
              d="M52.7842 10.916L33.1458 24.3542C27.7968 28.6272 26.0082 33.9103 27.7799 40.2035C28.0294 41.0277 28.7959 43.981 32.6275 46.7169C33.9332 47.6492 36.7844 48.9064 41.1812 50.4883L41.081 50.5552L31.7038 56.8097C27.5674 60.1313 26.893 64.3206 29.6805 69.3773C32.0874 72.4947 36.5668 73.3427 40.1251 71.9675C42.4973 71.0507 48.3707 67.1525 57.7452 60.2727C60.7991 56.7157 62.0527 52.8355 61.506 48.632C60.6666 43.5019 57.2919 39.7936 51.3819 37.5071L47.3571 35.7936L61.905 25.3834L52.7842 10.916Z"
              fill="white" />
          </mask>
          <g mask="url(#mask0_78_100113)">
            <path
              d="M52.7842 10.916L33.1458 24.3542C27.7968 28.6272 26.0082 33.9103 27.7799 40.2035C28.0294 41.0277 28.7959 43.981 32.6275 46.7169C33.9332 47.6492 36.7844 48.9064 41.1812 50.4883L41.081 50.5552L31.7038 56.8097C27.5674 60.1313 26.893 64.3206 29.6805 69.3773C32.0874 72.4947 36.5668 73.3427 40.1251 71.9675C42.4973 71.0507 48.3707 67.1525 57.7452 60.2727C60.7991 56.7157 62.0527 52.8355 61.506 48.632C60.6666 43.5019 57.2919 39.7936 51.3819 37.5071L47.3571 35.7936L61.905 25.3834L52.7842 10.916Z"
              fill="var(--initial-loader-color)" />
            <path
              d="M37.067 21.6277C34.3841 25.8233 34.9701 29.3447 38.8249 32.1917C43.0036 34.0863 45.8088 35.3109 47.2406 35.8655L56.0284 37.6177L61.9052 25.3834C56.0805 16.1464 53.0403 11.324 52.7844 10.916C52.3823 11.2065 47.1432 14.7771 37.067 21.6277Z"
              fill="var(--initial-loader-color)" />
            <path
              d="M37.067 21.6277C34.3841 25.8233 34.9701 29.3447 38.8249 32.1917C43.0036 34.0863 45.8088 35.3109 47.2406 35.8655L56.0284 37.6177L61.9052 25.3834C56.0805 16.1464 53.0403 11.324 52.7844 10.916C52.3823 11.2065 47.1432 14.7771 37.067 21.6277Z"
              fill="white" fill-opacity="0.2" />
            <path
              d="M40.8974 50.5117L50.0096 54.4701C53.4962 57.2058 53.9276 60.488 51.3036 64.3167C48.6797 68.1453 46.2054 70.547 43.8806 71.5219C37.6491 73.6668 34.5333 74.7393 34.5333 74.7393C34.5333 74.7393 31.9307 72.9442 26.7256 69.3542C25.6709 63.0123 25.6709 59.6708 26.7256 59.3295C28.3077 58.8175 31.9779 53.5385 32.97 52.9789C33.6313 52.6058 36.2738 51.7834 40.8974 50.5117Z"
              fill="var(--initial-loader-color)" />
            <path
              d="M40.8974 50.5117L50.0096 54.4701C53.4962 57.2058 53.9276 60.488 51.3036 64.3167C48.6797 68.1453 46.2054 70.547 43.8806 71.5219C37.6491 73.6668 34.5333 74.7393 34.5333 74.7393C34.5333 74.7393 31.9307 72.9442 26.7256 69.3542C25.6709 63.0123 25.6709 59.6708 26.7256 59.3295C28.3077 58.8175 31.9779 53.5385 32.97 52.9789C33.6313 52.6058 36.2738 51.7834 40.8974 50.5117Z"
              fill="white" fill-opacity="0.2" />
          </g>
          <path
            d="M70.4677 14.8808L64.2677 29.4233C63.4459 31.3509 61.2238 32.2476 59.3046 31.4263C58.5527 31.1045 57.9255 30.5464 57.5172 29.8359L48.0812 13.4164C47.0389 11.6028 47.6604 9.28197 49.4694 8.23272C50.1781 7.82165 51.0001 7.65213 51.8121 7.7496L67.4482 9.62656C69.5207 9.87534 70.9969 11.7636 70.7454 13.844C70.7022 14.201 70.6087 14.5501 70.4677 14.8808Z"
            fill="var(--initial-loader-color)" />
          <path
            d="M70.4677 14.8808L64.2677 29.4233C63.4459 31.3509 61.2238 32.2476 59.3046 31.4263C58.5527 31.1045 57.9255 30.5464 57.5172 29.8359L48.0812 13.4164C47.0389 11.6028 47.6604 9.28197 49.4694 8.23272C50.1781 7.82165 51.0001 7.65213 51.8121 7.7496L67.4482 9.62656C69.5207 9.87534 70.9969 11.7636 70.7454 13.844C70.7022 14.201 70.6087 14.5501 70.4677 14.8808Z"
            fill="white" fill-opacity="0.2" />
        </svg>

      </div>
      <div class="loading">
        <div class="effect-1 effects"></div>
        <div class="effect-2 effects"></div>
        <div class="effect-3 effects"></div>
      </div>
    </div>
  </div>
  
  <script>
    const loaderColor = localStorage.getItem('sneat-initial-loader-bg') || '#FFFFFF'
    const primaryColor = localStorage.getItem('sneat-initial-loader-color') || '#696CFF'

    if (loaderColor)
      document.documentElement.style.setProperty('--initial-loader-bg', loaderColor)

    if (primaryColor)
      document.documentElement.style.setProperty('--initial-loader-color', primaryColor)
  </script>
</body>

</html>
