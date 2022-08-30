<style>
  /* Googlefont Poppins CDN Link */
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  .sidebar {
    position: fixed;
    height: 100%;
    width: 240px;
    background: #0a2558;
    transition: all 0.5s ease;
  }

  .sidebar.active {
    width: 60px;
  }

  .sidebar .logo-details {
    height: 80px;
    display: flex;
    align-items: center;
  }

  .sidebar .logo-details i {
    font-size: 28px;
    font-weight: 500;
    color: #fff;
    min-width: 60px;
    text-align: center;
  }

  .sidebar .logo-details .logo_name {
    color: #fff;
    font-size: 24px;
    font-weight: 500;
  }

  .sidebar .nav-links {
    margin-top: 10px;
  }

  .sidebar .nav-links li {
    position: relative;
    list-style: none;
    height: 50px;
  }

  .sidebar .nav-links li a {
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: all 0.4s ease;
  }

  .sidebar .nav-links li a.active {
    background: #081d45;
  }

  .sidebar .nav-links li a:hover {
    background: #081d45;
  }

  .sidebar .nav-links li i {
    min-width: 60px;
    text-align: center;
    font-size: 18px;
    color: #fff;
  }

  .sidebar .nav-links li a .links_name {
    color: #fff;
    font-size: 13px;
    font-weight: 400;
    white-space: nowrap;
  }

  .sidebar .nav-links .log_out {
    position: absolute;
    bottom: 0;
    width: 100%;
  }

  .home-section {
    position: relative;
    background: #ffffff;
    min-height: 100vh;
    width: calc(100% - 240px);
    left: 240px;
    transition: all 0.5s ease;
  }

  .Graph{
    position: relative;
    min-height: 100vh;
    width: calc(100% - 240px);
    left: 240px;
    top: 350px;
    transition: all 0.5s ease;
  }
  .sidebar.active~.home-section {
    width: calc(100% - 60px);
    left: 60px;
  }

  .home-section nav {
    display: flex;
    justify-content: space-between;
    height: 80px;
    background: #fff;
    display: flex;
    align-items: center;
    position: fixed;
    width: calc(100% - 240px);
    left: 240px;
    z-index: 100;
    padding: 0 20px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    transition: all 0.5s ease;
  }

  .sidebar.active~.home-section nav {
    left: 60px;
    width: calc(100% - 60px);
  }

  .home-section nav .sidebar-button {
    display: flex;
    align-items: center;
    font-size: 24px;
    font-weight: 500;
  }

  nav .sidebar-button i {
    font-size: 35px;
    margin-right: 10px;
  }

  .home-section nav .search-box {
    position: relative;
    height: 50px;
    max-width: 550px;
    width: 100%;
    margin: 0 20px;
  }

  nav .search-box input {
    height: 100%;
    width: 100%;
    outline: none;
    background: #f5f6fa;
    border: 2px solid #efeef1;
    border-radius: 6px;
    font-size: 18px;
    padding: 0 15px;
  }

  nav .search-box .bx-search {
    position: absolute;
    height: 40px;
    width: 40px;
    background: #2697ff;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
    border-radius: 4px;
    line-height: 40px;
    text-align: center;
    color: #fff;
    font-size: 22px;
    transition: all 0.4 ease;
  }

  .home-section nav .profile-details {
    display: flex;
    align-items: center;
    background: #f5f6fa;
    border: 2px solid #efeef1;
    border-radius: 6px;
    height: 50px;
    min-width: 190px;
    padding: 0 15px 0 2px;
  }

  nav .profile-details img {
    height: 40px;
    width: 40px;
    border-radius: 6px;
    object-fit: cover;
  }

  nav .profile-details .admin_name {
    font-size: 15px;
    font-weight: 500;
    color: #333;
    margin: 0 10px;
    white-space: nowrap;
  }

  .home-section .home-content {
    position: relative;
    padding-top: 104px;
  }

  .titlel {
    text-align: center;
  }
</style>