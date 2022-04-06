<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="dashboardMainContainer">
        <div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">IMS</h3>
            <div class="dashboard_sidebar_user">
                <img src="uploads/use.png" alt="User image" srcset="" id="userImage">
                <span>Jellos</span>
            </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists">
                    <li class="menuActive">
                        <a href=""><i class="fa fa-dashboard menuIcons"></i> <span class="menuText"> Dashboard</span> </a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-dashboard menuIcons"></i><span class="menuText"> Dashboard</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <div class="dashboard_topNav">
                <a href="#" id="toggleBtn"><i class="fa fa-navicon"></i></a>
                <a href="sign_in.php" id="logoutBtn"><i class="fa fa-power-off"></i>Sign-out</a>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_main">

                </div>
            </div>
        </div>
    </div>
    <script>
        let sideBarIsOpen = true;

        toggleBtn.addEventListener('click', (event) => {
            event.preventDefault();

            if (sideBarIsOpen) {

                dashboard_sidebar.style.width = '10%';
                dashboard_sidebar.style.transition = '0.3s all';
                dashboard_content_container.style.width = '90%';
                dashboard_logo.style.fontSize = '60px';
                userImage.style.width = '60px';

                menuIcons = document.getElementsByClassName('menuText');
                for (let i = 0; i < menuIcons.length; i++) {
                    menuIcons[i].style.display = 'none';

                }
                document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';

                sideBarIsOpen = false;

            } else {
                dashboard_sidebar.style.width = '20%';
                dashboard_content_container.style.width = '80%';
                dashboard_logo.style.fontSize = '80px';
                userImage.style.width = '80px';

                menuIcons = document.getElementsByClassName('menuText');
                for (let i = 0; i < menuIcons.length; i++) {
                    menuIcons[i].style.display = 'inline-block';

                }
                document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'left';
                sideBarIsOpen = true;

            }

        });
    </script>
</body>

</html>