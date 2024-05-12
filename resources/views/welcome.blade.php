<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inkwell</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">
</head>
<style>

    :root{
        /*---------COLOR--------*/
        --cor-principal: #FF5B29;

        --cor-fundo: #18191A;
        --cor-fundo-post: #3A3B3C;
        --cor-perfis: #747474;
        --cor-texto-post: #FFFFFF;
        --cor-color-1: #D5D7DC;
        --cor-fundo-bloco-post: #242526;
        --cor-detalhes: #2A2B2C;


        /*----------------------*/
    }
*{
    margin: 0;
    padding: 0;
    font-family: Montserrat, sans-serif;
    color: inherit;
    text-decoration: none;

}
header{
background-color: var(--cor-fundo);
width: calc(100%);
height: 4.625rem;
}

.content_header{
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
}
.search_box input{
    margin: 0 auto;
    padding: 0 20px;
    height: 2.62rem;
    width: calc(600px - 1.625rem);
    background-color: var(--cor-fundo-post);
    border-radius: 15px;
    border: none;
    outline: none;
    color: var(--cor-color-1);
    /* display: block; */
}
.search-icon{
  position: relative;
  float: right;
  top: 12px;
  left: -40px;
}
.perfil_icon-bar{
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: var(--cor-principal);
    margin-right: 8px
}

.content_menu-bar{
    display: flex;
    align-items: center;
}
.perfil-icon-name{
    display: flex;
    align-items: center;
    margin: 0 30px;
}
.perfil-icon-name a{
    text-decoration: none;
    color: var(--cor-texto-post);
    font-weight: 400;
    font-size: 0.875rem;
}
.container{
    height: calc(100vh - 4.625rem);
    width: 100%;
    background-color: var(--cor-fundo);
}
.logo_box{

}
.container{
    display: grid;
    grid-template-columns:auto 1fr auto ;
}
aside{
    /* width: 300px; */
    padding: 0 20px;
    /* background-color: red; */
    height: calc(100vh - 4.625rem);
}
main{
    /* background-color: green; */
}
.notificacoes{
    width: 220px;
    height: calc(100vh - 4.625rem);

}
.peril-icon-container{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: var(--cor-principal);
    margin-right: 8px;
}
.content-aside{
    margin-left: 30px;
    margin-top: 30px;
}
.perfil-box{
    display: flex;
    align-items: center;
}
.perfil-box h4,h6{
    color: var(--cor-color-1);
}
.perfil-text-container h4{
    margin-bottom: 8px;
    font-size: 0.875rem;
}
.perfil-text-container h6{
    font-family: Roboto serif,sans-serif;
    font-weight: 300;
    font-style: italic;
    font-size: 0.75rem;
    color: var(--cor-perfis);
}
.follow-box
{
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}
.follow-box h6{
    color: var(--cor-principal);
    font-weight: 600;
    font-size: 0.75rem;

}
.follow-box h4{
    color: var(--cor-perfis);
    font-weight: 600;
    font-size: 0.75rem;
}
.btn-perfil{
    border:none;
    background-color: inherit;
    padding: 10px 60px;
    border: solid 1px var(--cor-color-1);
    color: var(--cor-color-1);
    font-weight: 600;
    border-radius: 15px;
    margin-top: 20px;
}
nav ul{
    list-style: none;
    margin-top: 30px;
}
nav ul li{
    margin-top: 20px;
    margin-left: 10px;
    font-size: 16px;
    font-weight: 500;
    color: var(--cor-color-1);
    display: flex;
    text-align: center;
    align-items: center;
}
nav ul li svg{
    margin-right: 8px;
}
.btn_new-book{
    border:none;
    background-color: inherit;
    padding: 10px 40px;
    background-color: var(--cor-texto-post);
    color: var(--cor-fundo);
    font-weight: 600;
    border-radius: 15px;
    margin-top: 40px;
    place-self: center;
}
.btn_new-book::before{
    content: "";
    display: flex;
    width: 171px;
    height: 1px;
    background-color: var(--cor-detalhes);
    position: absolute;
    bottom: 50px;
    left: 0px;
}
.notification-content{
    width: 200px;
    margin-top: 30px;
}
.notification-content h5{
    font-size: 12px;
    font-weight: 400;
    margin-bottom: 8px;
    color: var(--cor-perfis);
}
.notification-box{
    width: 200px;
    height: 85px;
    background-color: var(--cor-fundo-bloco-post);
    border-radius: 15px;
    margin-top: 20px;
    display: flex;
}
.perfil_photo-notification{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: var(--cor-perfis);
    position: relative;
    left: -7px;
    top: -7px;
}
.text-content {
    margin: 10px;
    width: 65%;
    word-break: break-all;
}
.text-content h6{
    font-size: 14px;
    font-weight: 400;
}
.text-content p{
    margin-top: 8px;
    font-size: 12px;
    font-weight: 500;
    font-style: italic;
    color: var(--cor-color-1);
}
.menus{
    position: relative;
}
</style>
<body>
    <header>
        <div class="content_header">
            <div class="logo_box">
                <a href="#">
                    <svg width="116" height="30" viewBox="0 0 116 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.424 19.528V7.432C26.424 7.08 26.288 6.848 26.016 6.736C25.744 6.624 25.4 6.568 24.984 6.568H24.744V4.96H32.736V6.568H32.496C32.08 6.568 31.736 6.624 31.464 6.736C31.192 6.848 31.056 7.08 31.056 7.432V19.528C31.056 19.88 31.192 20.112 31.464 20.224C31.736 20.336 32.08 20.392 32.496 20.392H32.736V22H24.744V20.392H24.984C25.4 20.392 25.744 20.336 26.016 20.224C26.288 20.112 26.424 19.88 26.424 19.528Z" fill="#FF5B29"/>
                        <path d="M34.1156 22V20.488H34.1396C34.3796 20.488 34.5956 20.472 34.7876 20.44C34.9796 20.392 35.1316 20.32 35.2436 20.224C35.3556 20.112 35.4116 19.96 35.4116 19.768V12.136C35.4116 11.96 35.3716 11.832 35.2916 11.752C35.2116 11.656 35.0916 11.576 34.9316 11.512C34.7716 11.448 34.5636 11.384 34.3076 11.32L34.1156 11.272V9.712H39.4916V12.376H39.7796V20.296C39.7796 20.344 39.8356 20.384 39.9476 20.416C40.0756 20.448 40.2196 20.472 40.3796 20.488C40.5556 20.488 40.7156 20.488 40.8596 20.488H40.9316V22H34.1156ZM49.2116 22H42.3956V20.488H42.4196C42.5636 20.488 42.7236 20.488 42.8996 20.488C43.0756 20.472 43.2276 20.448 43.3556 20.416C43.4836 20.368 43.5476 20.328 43.5476 20.296V13.6C43.5476 13.2 43.4996 12.872 43.4036 12.616C43.3236 12.36 43.1876 12.168 42.9956 12.04C42.8036 11.912 42.5476 11.848 42.2276 11.848C41.8436 11.848 41.4756 11.96 41.1236 12.184C40.7876 12.392 40.4676 12.712 40.1636 13.144C39.8596 13.56 39.5636 14.088 39.2756 14.728V12.448C39.5796 11.824 39.9476 11.296 40.3796 10.864C40.8276 10.416 41.3396 10.072 41.9156 9.832C42.5076 9.592 43.1556 9.472 43.8596 9.472C44.6756 9.472 45.3876 9.632 45.9956 9.952C46.6036 10.256 47.0756 10.712 47.4116 11.32C47.7476 11.928 47.9156 12.696 47.9156 13.624V19.768C47.9156 19.96 47.9716 20.112 48.0836 20.224C48.1956 20.32 48.3396 20.392 48.5156 20.44C48.7076 20.472 48.9236 20.488 49.1636 20.488H49.2116V22Z" fill="#FF5B29"/>
                        <path d="M65.6286 22H58.1406V20.488H58.2126C58.3566 20.488 58.5086 20.488 58.6686 20.488C58.8446 20.472 58.9886 20.448 59.1006 20.416C59.2286 20.368 59.2926 20.32 59.2926 20.272L56.2926 15.856V15.328L60.4206 11.656C60.4206 11.528 60.3166 11.44 60.1086 11.392C59.9166 11.328 59.6846 11.288 59.4126 11.272C59.1566 11.24 58.9166 11.224 58.6926 11.224H58.5486V9.712H64.7166V11.224H64.6686C64.3646 11.224 64.0686 11.264 63.7806 11.344C63.5086 11.424 63.2446 11.544 62.9886 11.704C62.7486 11.848 62.5086 12.024 62.2686 12.232L58.5726 15.52L59.4606 13.624L63.7566 19.696C63.9166 19.888 64.0926 20.048 64.2846 20.176C64.4766 20.288 64.6846 20.368 64.9086 20.416C65.1326 20.464 65.3566 20.488 65.5806 20.488H65.6286V22ZM55.7646 4.36V20.272C55.7646 20.32 55.8206 20.368 55.9326 20.416C56.0606 20.448 56.2046 20.472 56.3646 20.488C56.5406 20.488 56.7006 20.488 56.8446 20.488H56.9166V22H50.0766V20.488H50.1006C50.4686 20.488 50.7726 20.44 51.0126 20.344C51.2526 20.248 51.3726 20.056 51.3726 19.768V6.76C51.3726 6.6 51.3326 6.472 51.2526 6.376C51.1886 6.28 51.0766 6.2 50.9166 6.136C50.7566 6.072 50.5406 6.016 50.2686 5.968L50.0766 5.92V4.36H55.7646Z" fill="#FF5B29"/>
                        <path d="M76.2319 13.312L73.9759 22H69.7999L67.1359 11.992C67.0879 11.784 66.9999 11.624 66.8719 11.512C66.7599 11.4 66.6239 11.32 66.4639 11.272C66.3039 11.224 66.1039 11.2 65.8639 11.2H65.8399V9.712H72.9199V11.2H72.8959C72.6399 11.2 72.3919 11.208 72.1519 11.224C71.9279 11.24 71.7359 11.264 71.5759 11.296C71.4319 11.312 71.3599 11.352 71.3599 11.416L73.3519 19.648L72.6559 20.608L75.4159 9.712H78.8959L81.4639 19.624L80.6719 20.536L82.9279 11.704C82.9279 11.608 82.8559 11.52 82.7119 11.44C82.5839 11.36 82.4079 11.304 82.1839 11.272C81.9759 11.224 81.7519 11.2 81.5119 11.2H81.4639V9.712H86.0959V11.2H86.0719C85.8799 11.2 85.6959 11.24 85.5199 11.32C85.3439 11.384 85.1919 11.488 85.0639 11.632C84.9359 11.776 84.8319 11.976 84.7519 12.232L82.2079 22H78.0079L75.8239 13.12L76.2319 13.312Z" fill="#FF5B29"/>
                        <path d="M90.9647 15.904C90.9647 16.608 91.0287 17.232 91.1567 17.776C91.3007 18.32 91.5007 18.784 91.7567 19.168C92.0127 19.536 92.3487 19.816 92.7647 20.008C93.1807 20.184 93.6607 20.272 94.2047 20.272C94.7807 20.272 95.2687 20.168 95.6687 19.96C96.0847 19.736 96.4367 19.456 96.7247 19.12C97.0287 18.768 97.2767 18.416 97.4687 18.064L99.0287 19.144C98.7087 19.736 98.3007 20.272 97.8047 20.752C97.3087 21.216 96.7087 21.584 96.0047 21.856C95.3167 22.112 94.4927 22.24 93.5327 22.24C92.1407 22.24 90.9167 21.984 89.8607 21.472C88.8207 20.96 88.0127 20.232 87.4367 19.288C86.8607 18.328 86.5727 17.192 86.5727 15.88C86.5727 14.6 86.8527 13.48 87.4127 12.52C87.9887 11.56 88.7647 10.816 89.7407 10.288C90.7327 9.744 91.8527 9.472 93.1007 9.472C94.1087 9.472 94.9887 9.624 95.7407 9.928C96.5087 10.216 97.1487 10.656 97.6607 11.248C98.1887 11.84 98.5807 12.584 98.8367 13.48C99.1087 14.36 99.2447 15.392 99.2447 16.576H90.4847V14.848H95.6927L95.1647 15.568C95.1487 14.752 95.1007 14.08 95.0207 13.552C94.9407 13.008 94.8207 12.576 94.6607 12.256C94.5007 11.936 94.3007 11.712 94.0607 11.584C93.8207 11.44 93.5327 11.368 93.1967 11.368C92.8607 11.368 92.5567 11.456 92.2847 11.632C92.0287 11.808 91.7967 12.08 91.5887 12.448C91.3967 12.816 91.2447 13.288 91.1327 13.864C91.0207 14.424 90.9647 15.104 90.9647 15.904Z" fill="#FF5B29"/>
                        <path d="M106.037 4.36V19.768C106.037 20.056 106.157 20.248 106.397 20.344C106.637 20.44 106.933 20.488 107.285 20.488H107.333V22H100.349V20.488H100.373C100.757 20.488 101.061 20.44 101.285 20.344C101.525 20.248 101.645 20.056 101.645 19.768V6.76C101.645 6.6 101.605 6.472 101.525 6.376C101.461 6.28 101.349 6.2 101.189 6.136C101.029 6.072 100.813 6.016 100.541 5.968L100.349 5.92V4.36H106.037Z" fill="#FF5B29"/>
                        <path d="M113.912 4.36V19.768C113.912 20.056 114.032 20.248 114.272 20.344C114.512 20.44 114.808 20.488 115.16 20.488H115.208V22H108.224V20.488H108.248C108.632 20.488 108.936 20.44 109.16 20.344C109.4 20.248 109.52 20.056 109.52 19.768V6.76C109.52 6.6 109.48 6.472 109.4 6.376C109.336 6.28 109.224 6.2 109.064 6.136C108.904 6.072 108.688 6.016 108.416 5.968L108.224 5.92V4.36H113.912Z" fill="#FF5B29"/>
                        <path d="M15.9099 17.0416C16.4748 16.2396 16.6569 15.228 16.4061 14.2795L13.8436 6.33908H2.95789L0.394416 14.2795C0.143576 15.228 0.325744 16.2396 0.890647 17.0416L7.02008 25.7337V27.1216C6.64748 27.4164 6.40942 27.8724 6.40942 28.3851C6.40942 29.2768 7.13176 30.0001 8.02444 30.0001V15.4843C7.41653 15.3186 6.96975 14.7638 6.96975 14.1037C6.96975 13.3136 7.60971 12.6727 8.40072 12.6727C9.1908 12.6727 9.8317 13.3136 9.8317 14.1037C9.8317 14.7638 9.38399 15.3186 8.77701 15.4834V30C9.66875 30 10.392 29.2767 10.392 28.385C10.392 27.8723 10.1531 27.4164 9.78043 27.1215V25.7336L15.9099 17.0416Z" fill="#FF5B29"/>
                        <path d="M14.1969 0H2.60451V5.159H14.1969V0Z" fill="#FF5B29"/>
                        </svg>
                </a>
            </div>

            <div class="search_box">
                <input type="text" name="search_item" id="search_item" placeholder="Pesquisar...">

                <a href="#" class="search-icon">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.6 18L10.3 11.7C9.8 12.1 9.225 12.4167 8.575 12.65C7.925 12.8833 7.23333 13 6.5 13C4.68333 13 3.14583 12.3708 1.8875 11.1125C0.629167 9.85417 0 8.31667 0 6.5C0 4.68333 0.629167 3.14583 1.8875 1.8875C3.14583 0.629167 4.68333 0 6.5 0C8.31667 0 9.85417 0.629167 11.1125 1.8875C12.3708 3.14583 13 4.68333 13 6.5C13 7.23333 12.8833 7.925 12.65 8.575C12.4167 9.225 12.1 9.8 11.7 10.3L18 16.6L16.6 18ZM6.5 11C7.75 11 8.8125 10.5625 9.6875 9.6875C10.5625 8.8125 11 7.75 11 6.5C11 5.25 10.5625 4.1875 9.6875 3.3125C8.8125 2.4375 7.75 2 6.5 2C5.25 2 4.1875 2.4375 3.3125 3.3125C2.4375 4.1875 2 5.25 2 6.5C2 7.75 2.4375 8.8125 3.3125 9.6875C4.1875 10.5625 5.25 11 6.5 11Z" fill="#FF5B29"/>
                    </svg>

                </a>
            </div>

            <div class="content_menu-bar">
                <a href="#" class="notification-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 19V17H6V10C6 8.61667 6.41667 7.3875 7.25 6.3125C8.08333 5.2375 9.16667 4.53333 10.5 4.2V3.5C10.5 3.08333 10.6458 2.72917 10.9375 2.4375C11.2292 2.14583 11.5833 2 12 2C12.4167 2 12.7708 2.14583 13.0625 2.4375C13.3542 2.72917 13.5 3.08333 13.5 3.5V4.2C14.8333 4.53333 15.9167 5.2375 16.75 6.3125C17.5833 7.3875 18 8.61667 18 10V17H20V19H4ZM12 22C11.45 22 10.9792 21.8042 10.5875 21.4125C10.1958 21.0208 10 20.55 10 20H14C14 20.55 13.8042 21.0208 13.4125 21.4125C13.0208 21.8042 12.55 22 12 22ZM8 17H16V10C16 8.9 15.6083 7.95833 14.825 7.175C14.0417 6.39167 13.1 6 12 6C10.9 6 9.95833 6.39167 9.175 7.175C8.39167 7.95833 8 8.9 8 10V17Z" fill="#747474"/>
                        </svg>
                </a>

                <div class="perfil-icon-name">
                    <div class="perfil_icon-bar">
                        <a href="#">
                        </a>
                    </div>
                    <a href="#">MARCO TESTE</a>
                </div>

                <a href="#" class="config-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.2502 22L8.8502 18.8C8.63353 18.7167 8.42936 18.6167 8.2377 18.5C8.04603 18.3833 7.85853 18.2583 7.6752 18.125L4.7002 19.375L1.9502 14.625L4.5252 12.675C4.50853 12.5583 4.5002 12.4458 4.5002 12.3375V11.6625C4.5002 11.5542 4.50853 11.4417 4.5252 11.325L1.9502 9.375L4.7002 4.625L7.6752 5.875C7.85853 5.74167 8.0502 5.61667 8.2502 5.5C8.4502 5.38333 8.6502 5.28333 8.8502 5.2L9.2502 2H14.7502L15.1502 5.2C15.3669 5.28333 15.571 5.38333 15.7627 5.5C15.9544 5.61667 16.1419 5.74167 16.3252 5.875L19.3002 4.625L22.0502 9.375L19.4752 11.325C19.4919 11.4417 19.5002 11.5542 19.5002 11.6625V12.3375C19.5002 12.4458 19.4835 12.5583 19.4502 12.675L22.0252 14.625L19.2752 19.375L16.3252 18.125C16.1419 18.2583 15.9502 18.3833 15.7502 18.5C15.5502 18.6167 15.3502 18.7167 15.1502 18.8L14.7502 22H9.2502ZM11.0002 20H12.9752L13.3252 17.35C13.8419 17.2167 14.321 17.0208 14.7627 16.7625C15.2044 16.5042 15.6085 16.1917 15.9752 15.825L18.4502 16.85L19.4252 15.15L17.2752 13.525C17.3585 13.2917 17.4169 13.0458 17.4502 12.7875C17.4835 12.5292 17.5002 12.2667 17.5002 12C17.5002 11.7333 17.4835 11.4708 17.4502 11.2125C17.4169 10.9542 17.3585 10.7083 17.2752 10.475L19.4252 8.85L18.4502 7.15L15.9752 8.2C15.6085 7.81667 15.2044 7.49583 14.7627 7.2375C14.321 6.97917 13.8419 6.78333 13.3252 6.65L13.0002 4H11.0252L10.6752 6.65C10.1585 6.78333 9.67936 6.97917 9.2377 7.2375C8.79603 7.49583 8.39186 7.80833 8.0252 8.175L5.5502 7.15L4.5752 8.85L6.7252 10.45C6.64186 10.7 6.58353 10.95 6.5502 11.2C6.51686 11.45 6.5002 11.7167 6.5002 12C6.5002 12.2667 6.51686 12.525 6.5502 12.775C6.58353 13.025 6.64186 13.275 6.7252 13.525L4.5752 15.15L5.5502 16.85L8.0252 15.8C8.39186 16.1833 8.79603 16.5042 9.2377 16.7625C9.67936 17.0208 10.1585 17.2167 10.6752 17.35L11.0002 20ZM12.0502 15.5C13.0169 15.5 13.8419 15.1583 14.5252 14.475C15.2085 13.7917 15.5502 12.9667 15.5502 12C15.5502 11.0333 15.2085 10.2083 14.5252 9.525C13.8419 8.84167 13.0169 8.5 12.0502 8.5C11.0669 8.5 10.2377 8.84167 9.5627 9.525C8.8877 10.2083 8.5502 11.0333 8.5502 12C8.5502 12.9667 8.8877 13.7917 9.5627 14.475C10.2377 15.1583 11.0669 15.5 12.0502 15.5Z" fill="#747474"/>
                        </svg>

                </a>
            </div>
        </div>
    </header>

    <div class="container">
        <aside>
            <div class="content-aside">
                <div class="grops_menus">
                    <div class="perfil">
                        <div class="perfil-box">
                            <div class="peril-icon-container"></div>
                            <div class="perfil-text-container">
                                <h4>Marco Ocram .N</h4>
                                <h6>@M.ocram_N</h6>
                            </div>
                        </div>

                        <div class="follow-box">
                            <div class="followers">
                                <h6>23633</h6>
                                <h4>Seguidores</h4>
                            </div>

                            <div class="following" align="right">
                                <h6>23633</h6>
                                <h4>Seguindo</h4>
                            </div>
                        </div>

                        <button class="btn-perfil">
                             Ver Perfil
                        </button>
                    </div>

                    <div class="menus">
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0H18V18H0V0Z" fill="white" fill-opacity="0.01"/>
                                            <path d="M3.375 6.75V15.75H14.625V6.75L9 2.25L3.375 6.75Z" fill="white" fill-opacity="0.01"/>
                                            <path d="M3.375 15.75V6.75L1.5 8.25L9 2.25L16.5 8.25L14.625 6.75V15.75H3.375Z" stroke="#D5D7DC" stroke-width="1.61535" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.125 10.875V15.75H10.875V10.875H7.125Z" fill="#D5D7DC" stroke="white" stroke-opacity="0.01" stroke-width="1.61535" stroke-linejoin="round"/>
                                            <path d="M3.375 15.75H14.625" stroke="#D5D7DC" stroke-width="1.61535" stroke-linecap="round"/>
                                            </svg>
                                            Home
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0.224487H16V16.2245H0V0.224487Z" fill="white" fill-opacity="0.01"/>
                                            <path d="M7.00016 12.8912C10.1298 12.8912 12.6668 10.3541 12.6668 7.22453C12.6668 4.09493 10.1298 1.55786 7.00016 1.55786C3.87056 1.55786 1.3335 4.09493 1.3335 7.22453C1.3335 10.3541 3.87056 12.8912 7.00016 12.8912Z" fill="white" fill-opacity="0.01" stroke="#D5D7DC" stroke-width="1.61535" stroke-linejoin="round"/>
                                            <path d="M8.88598 5.00564C8.40341 4.52308 7.73675 4.22461 7.00038 4.22461C6.26401 4.22461 5.59735 4.52308 5.11475 5.00564" stroke="#D5D7DC" stroke-width="1.61535" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.0742 11.2985L13.9027 14.1269" stroke="#D5D7DC" stroke-width="1.61535" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        Pesquisar
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0.224487H16V16.2245H0V0.224487Z" fill="white" fill-opacity="0.01"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.00016 14.8912C11.6821 14.8912 14.6668 11.9064 14.6668 8.22453C14.6668 4.54263 11.6821 1.55786 8.00016 1.55786C4.31826 1.55786 1.3335 4.54263 1.3335 8.22453C1.3335 11.9064 4.31826 14.8912 8.00016 14.8912Z" stroke="#D5D7DC" stroke-width="1.61535" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M1.3335 8.22455H14.6668" stroke="#D5D7DC" stroke-width="1.61535" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.00016 14.8912C9.47293 14.8912 10.6668 11.9064 10.6668 8.22453C10.6668 4.54263 9.47293 1.55786 8.00016 1.55786C6.5274 1.55786 5.3335 4.54263 5.3335 8.22453C5.3335 11.9064 6.5274 14.8912 8.00016 14.8912Z" stroke="#D5D7DC" stroke-width="1.61535" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.28613 3.60522C4.49256 4.81166 6.15923 5.55786 8.00016 5.55786C9.84113 5.55786 11.5078 4.81166 12.7142 3.60522" stroke="#D5D7DC" stroke-width="1.61535" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.7142 12.8438C11.5078 11.6374 9.84113 10.8912 8.00016 10.8912C6.15923 10.8912 4.49256 11.6374 3.28613 12.8438" stroke="#D5D7DC" stroke-width="1.61535" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        Explorar
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0.224487H16V16.2245H0V0.224487Z" fill="white" fill-opacity="0.01"/>
                                            <path d="M2.6665 13.5578C2.6665 12.2245 2.6665 3.5578 2.6665 3.5578C2.6665 2.45323 3.62164 1.5578 4.79984 1.5578H13.3332V12.2245C13.3332 12.2245 6.66034 12.2245 4.79984 12.2245C3.12059 12.2245 2.6665 12.4525 2.6665 13.5578Z" fill="white" fill-opacity="0.01" stroke="#D5D7DC" stroke-width="1.61535" stroke-linejoin="round"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.99984 14.8912H13.3332V12.2245H3.99984C3.26346 12.2245 2.6665 12.8215 2.6665 13.5578C2.6665 14.2942 3.26346 14.8912 3.99984 14.8912Z" stroke="#D5D7DC" stroke-width="1.61535" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        Livros
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0.224487H16V16.2245H0V0.224487Z" fill="white" fill-opacity="0.01"/>
                                            <path d="M2.6665 13.5578C2.6665 12.2245 2.6665 3.5578 2.6665 3.5578C2.6665 2.45323 3.62164 1.5578 4.79984 1.5578H13.3332V12.2245C13.3332 12.2245 6.66034 12.2245 4.79984 12.2245C3.12059 12.2245 2.6665 12.4525 2.6665 13.5578Z" fill="white" fill-opacity="0.01" stroke="#D5D7DC" stroke-width="1.61535" stroke-linejoin="round"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.99984 14.8912H13.3332V12.2245H3.99984C3.26346 12.2245 2.6665 12.8215 2.6665 13.5578C2.6665 14.2942 3.26346 14.8912 3.99984 14.8912Z" stroke="#D5D7DC" stroke-width="1.61535" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        Clube do Livro
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 -960 960 960" width="18px" fill="#D5D7DC"><path d="M411-480q-28 0-46-21t-13-49l12-72q8-43 40.5-70.5T480-720q44 0 76.5 27.5T597-622l12 72q5 28-13 49t-46 21H411Zm-287 39q-23 1-39.5-9T63-481q-2-9-1-18t5-17q0 1-1-4-2-2-10-24-2-12 3-23t13-19l2-2q2-19 15.5-32t33.5-13q3 0 19 4l3-1q5-5 13-7.5t17-2.5q11 0 19.5 3.5T208-626q1 0 1.5.5t1.5.5q14 1 24.5 8.5T251-596q2 7 1.5 13.5T250-570q0 1 1 4 7 7 11 15.5t4 17.5q0 4-6 21-1 2 0 4l2 16q0 21-17.5 36T202-441h-78Zm676 1q-33 0-56.5-23.5T720-520q0-12 3.5-22.5T733-563l-28-25q-10-8-3.5-20t18.5-12h80q33 0 56.5 23.5T880-540v20q0 33-23.5 56.5T800-440ZM0-240v-63q0-44 44.5-70.5T160-400q13 0 25 .5t23 2.5q-14 20-21 43t-7 49v65H0Zm240 0v-65q0-65 66.5-105T480-450q108 0 174 40t66 105v65H240Zm560-160q72 0 116 26.5t44 70.5v63H780v-65q0-26-6.5-49T754-397q11-2 22.5-2.5t23.5-.5Z"/></svg>
                                        Grupos
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <button class="btn_new-book">Novo Livro</button>
                    </div>
                </div>
            </div>

        </aside>

        <main>
            MAIN
        </main>

        <div class="notificacoes">
            <div class="notification-content">
                <h5>ATUALIZAÇOES</h5>
                <div class="notification-box">
                    <div class="perfil_photo-notification"></div>
                    <div class="text-content">
                        <h6>Louco Escritor</h6>
                        <p>Escreveu um trecho no grupo...
                        </p>
                    </div>
                </div>
                <div class="notification-box">
                    <div class="perfil_photo-notification"></div>
                </div>
                <div class="notification-box">
                    <div class="perfil_photo-notification"></div>
                </div>
                <div class="notification-box">
                    <div class="perfil_photo-notification"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
