<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/microsoft-2.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <nav class="container-normal">
        <a href="/">
            <div class="logo">
                <img src="{{ asset('img/RE1Mu3b.png') }}" alt="">
            </div>
        </a>
        <ul class="pc-menu">
            <li>Microsoft 365</li>
            <li>Teams</li>
            <li>Windows</li>
            <li>Surface</li>
            <li>Xbox</li>
            <li>支援</li>
        </ul>
        <ul class="func-menu">
            <li>
                <input type="checkbox" id="ham-menu-switch" hidden>
                <label for="ham-menu-switch" class="ham-menu"></label>
                <ul class="mobile-menu">
                    <li tabindex="1">Microsoft 365</li>
                    <li tabindex="1">Teams</li>
                    <li tabindex="1">Windows</li>
                    <li tabindex="1">Surface</li>
                    <li tabindex="1">Xbox</li>
                    <li tabindex="1">支援</li>
                    <input type="checkbox" id="chevron-soft-switch" class="chevron-switch" hidden>
                    <label for="chevron-soft-switch" class="chevron-label">
                        <li tabindex="1"><span>軟體</span>
                            <i class="fa-solid fa-chevron-down"></i>
                            <i class="fa-solid fa-chevron-up"></i>
                        </li>
                        <div class="sub-dropdown-menu">
                            <ul>
                                <li tabindex="1">Windows 應用程式</li>
                                <li tabindex="1">AI</li>
                                <li tabindex="1">OneDrive</li>
                                <li tabindex="1">Outlook</li>
                                <li tabindex="1">Skype</li>
                                <li tabindex="1">OneNote</li>
                                <li tabindex="1">Microsoft Teams</li>
                            </ul>
                        </div>
                    </label>

                    <input type="checkbox" id="chevron-2nd-switch" class="chevron-switch" hidden>
                    <label for="chevron-2nd-switch" class="chevron-label">
                        <li tabindex="1"><span>個人電腦和設備</span>
                            <i class="fa-solid fa-chevron-down"></i>
                            <i class="fa-solid fa-chevron-up"></i>
                        </li>
                        <div class="sub-dropdown-menu">
                            <ul>
                                <li tabindex="1">選購Xbox</li>
                                <li tabindex="1">電腦配件</li>
                            </ul>
                        </div>
                    </label>

                    <input type="checkbox" id="chevron-3nd-switch" class="chevron-switch" hidden>
                    <label for="chevron-3nd-switch" class="chevron-label">
                        <li tabindex="1"><span>娛樂</span>
                            <i class="fa-solid fa-chevron-down"></i>
                            <i class="fa-solid fa-chevron-up"></i>
                        </li>
                        <div class="sub-dropdown-menu">
                            <ul>
                                <li tabindex="1">Xbox Game Pass Ultimate</li>
                                <li tabindex="1">Xbox Live Gold</li>
                                <li tabindex="1">Xbox 與遊戲</li>
                                <li tabindex="1">電腦遊戲</li>
                                <li tabindex="1">Windows 遊戲</li>
                            </ul>
                        </div>
                    </label>

                    <input type="checkbox" id="chevron-4nd-switch" class="chevron-switch" hidden>
                    <label for="chevron-4nd-switch" class="chevron-label">
                        <li tabindex="1"><span>商務適用</span>
                            <i class="fa-solid fa-chevron-down"></i>
                            <i class="fa-solid fa-chevron-up"></i>
                        </li>
                        <div class="sub-dropdown-menu">
                            <ul>
                                <li tabindex="1">Microsoft Cloud</li>
                                <li tabindex="1">Microsoft 安全性</li>
                                <li tabindex="1">Azure</li>
                                <li tabindex="1">Dynamics 365</li>
                                <li tabindex="1">商務用 Microsoft 365</li>
                                <li tabindex="1">Microsoft 產用</li>
                                <li tabindex="1">Microsoft Power Platform</li>
                                <li tabindex="1">Windows 365</li>
                            </ul>
                        </div>
                    </label>

                    <input type="checkbox" id="chevron-5nd-switch" class="chevron-switch" hidden>
                    <label for="chevron-5nd-switch" class="chevron-label">
                        <li tabindex="1"><span>開發人員與IT</span>
                            <i class="fa-solid fa-chevron-down"></i>
                            <i class="fa-solid fa-chevron-up"></i>
                        </li>
                        <div class="sub-dropdown-menu">
                            <ul>
                                <li tabindex="1">開發人員中心</li>
                                <li tabindex="1">文件</li>
                                <li tabindex="1">Microsoft Learn</li>
                                <li tabindex="1">Microsoft 技術社群</li>
                                <li tabindex="1">Azure Marketplace</li>
                                <li tabindex="1">AppSource</li>
                                <li tabindex="1">Visual Studio</li>
                            </ul>
                        </div>
                    </label>

                    <input type="checkbox" id="chevron-6nd-switch" class="chevron-switch" hidden>
                    <label for="chevron-6nd-switch" class="chevron-label">
                        <li tabindex="1"><span>其他</span>
                            <i class="fa-solid fa-chevron-down"></i>
                            <i class="fa-solid fa-chevron-up"></i>
                        </li>
                        <div class="sub-dropdown-menu">
                            <ul>
                                <li tabindex="1">Microsoft Rewards</li>
                                <li tabindex="1">免費下載與安全性</li>
                                <li tabindex="1">教育</li>
                                <li tabindex="1">禮品卡</li>
                                <li tabindex="1">Licensing</li>
                            </ul>
                        </div>
                    </label>
                    <li tabindex="1">檢視網站地圖</li>
                </ul>
            </li>
            <input type="checkbox" id="all-microsoft-switch" hidden>
            <label for="all-microsoft-switch" class="all-microsoft-2">
                <li><span>所有 Microsoft</span></li>
            </label>
            <div class="all-microsoft">
                <div class="all-microsoft-content">
                    <ul>
                        <p>軟體</p>
                        <li>Windows 應用程式</li>
                        <li>AI</li>
                        <li>OneDrive</li>
                        <li>Outlook</li>
                        <li>Skype</li>
                        <li>OneNote</li>
                        <li>Microsoft Teams</li>
                    </ul>
                    <ul>
                        <p>個人電腦和設備</p>
                        <li>選購Xbox</li>
                        <li>電腦配件</li>
                    </ul>
                    <ul>
                        <p>娛樂</p>
                        <li>Xbox Game Pass Ultimate</li>
                        <li>Xbox Live Gold</li>
                        <li>Xbox 與遊戲</li>
                        <li>電腦遊戲</li>
                        <li>Windows 遊戲</li>
                    </ul>
                    <ul>
                        <p>商務適用</p>
                        <li>Microsoft Cloud</li>
                        <li>Microsoft 安全性</li>
                        <li>Azure</li>
                        <li>Dynamics 365</li>
                        <li>商務用 Microsoft 365</li>
                        <li>Microsoft 產用</li>
                        <li>Microsoft Power Platform</li>
                        <li>Windows 365</li>
                    </ul>
                    <ul>
                        <p>開發人員與IT</p>
                        <li>開發人員中心</li>
                        <li>文件</li>
                        <li>Microsoft Learn</li>
                        <li>Microsoft 技術社群</li>
                        <li>Azure Marketplace</li>
                        <li>AppSource</li>
                        <li>Visual Studio</li>
                    </ul>
                    <ul>
                        <p>其他</p>
                        <li>Microsoft Rewards</li>
                        <li>免費下載與安全性</li>
                        <li>教育</li>
                        <li>禮品卡</li>
                        <li>Licensing</li>
                    </ul>
                </div>
                <div class="web-map">
                    <a href=""><span>檢視網站地圖</span></a>
                </div>
            </div>
            <a href="">
                <li class="search">
                    <span class="hide-text">搜尋</span>
                    <img src="{{ asset('img/search-interface-symbol.png') }}" alt="">
                </li>
            </a>
            <a href="">
                <li class="shopping-car">
                    <span class="hide-text">購物車</span>
                    <img src="{{ asset('img/shopping-cart.png') }}" alt="">
                </li>
            </a>
            <a href="">
                <li class="login">
                    <span class="hide-text">登入</span>
                    <img src="{{ asset('img/profile.png') }}" alt="">
                </li>
            </a>
        </ul>
    </nav>

    <header>
        <div>
            <div id="swiper-1" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide my-swiper-slide-1">
                        <picture>
                            <source media="(min-width: 1400px)" srcset="{{ asset('img/02-1-1920x600.avif') }} ">
                            <source media="(min-width: 1084px)" srcset="{{ asset('img/02-1-1399x600.avif') }} ">
                            <source media="(min-width: 860px)" srcset="{{ asset('img/02-1-1083x600.avif') }} ">
                            <source media="(min-width: 540px)" srcset="{{ asset('img/02-1-859x540.avif') }} ">
                            <img src="{{ asset('img/02-1-859x540.avif') }}" alt="">
                        </picture>
                        <div class="main-text">
                            <div class="banner-title">Surface Pro 9</div>
                            <div class="banner-content">
                                平板電腦的彈性和筆記型電腦的效能 — 全都在一台攜帶超方便的裝置
                            </div>
                            <a href="">
                                <div class="deep-know">深入了解</div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide my-swiper-slide-2">
                        <picture>
                            <source media="(min-width: 1400px)" srcset=" {{ asset('img/02-2-1920x600.avif') }}">
                            <source media="(min-width: 1084px)" srcset=" {{ asset('img/02-2-1399x600.avif') }}">
                            <source media="(min-width: 860px)" srcset=" {{ asset('img/02-2-1083x600.avif') }}">
                            <source media="(min-width: 540px)" srcset=" {{ asset('img/02-2-859x540.avif') }}">
                            <img src="{{ asset('img/02-2-859x540.avif') }}" alt="">
                        </picture>
                        <div class="main-text">
                            <div class="banner-title">Microsoft 365</div>
                            <div class="banner-content">
                                使用 Microsoft 365 應用程式實現創意想法、提高線上和離線安全，並專注於最重要的事。
                            </div>
                            <a href="">
                                <div class="deep-know">適合1人使用</div>
                                <span>最多可供6人使用 ></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </header>

    <main>
        <section class="main-choice container-normal">
            <div class="one-choice">
                <a href="" <img src="{{ asset('img/microsoft1.png') }}" alt="">
                    <div>選擇您的 Microsoft 365</div>
                </a>
            </div>
            <div class="one-choice">
                <a href="">
                    <img src="{{ asset('img/surface.webp') }}" alt="">
                    <div>選購 Surface 裝置</div>
                </a>
            </div>
            <div class="one-choice">
                <a href="">
                    <img src="{{ asset('img/microsoft1.png') }}" alt="">
                    <div>取得 Windows 11</div>
                </a>
            </div>
        </section>

        <section class="four-card container-normal">
            <div class="one-card">
                <a href="">
                    <img src="{{ asset('img/Xbox-380x213.webp') }}" alt="">
                    <div class="title">Xbox Series X</div>
                    <div class="content">有史以來最快、最強大的Xbox</div>
                    <p>選購Xbox Series X</p>
                </a>
            </div>
            <div class="one-card">
                <a href="">
                    <img src="{{ asset('img/Bing.webp') }}" alt="">
                    <div class="title">隆重推出新版 Bing</div>
                    <div class="content">問真正的問題。聊天和創作。從您的AI網路副駕駛獲得更好的答案。</div>
                    <p>了解新版 Bing</p>
                </a>
            </div>
            <div class="one-card">
                <a href="">
                    <img src="{{ asset('img/gldn-XGP-Game-Pass-Ultimate.avif') }}" alt="">
                    <div class="title">Xbox Game Pass Ultimate</div>
                    <div class="content"> Xbox Live Gold 以及數百款高品質主機遊戲和電腦遊戲。 與好友同樂，並探索下一個最愛遊戲。 </div>
                    <p>立即加入</p>
                </a>
            </div>
            <div class="one-card">
                <a href="">
                    <img src="{{ asset('img/gldn-CP-Windows11-GlobalLaunch.jfif') }}" alt="">
                    <div class="title">專為今天和明天的生活而設計</div>
                    <div class="content"> 新一代遊戲、 您的目標、 親朋好友。 Windows 11 是為了讓您更貼近所喜愛的一切。 </div>
                    <p>查看您的電腦是否準備就緒</p>
                </a>
            </div>
        </section>

        <section class="microsoft-edge container-normal">
            <picture>
                <source media="(min-width: 1400px)" srcset="{{ asset('img/Edge-1596x600.avif') }}">
                <source media="(min-width: 1084px)" srcset="{{ asset('img/Edge_1260x600.avif') }}">
                <source media="(min-width: 860px)" srcset="{{ asset('img/Edge-1083x600.avif') }}">
                <source media="(min-width: 540px)" srcset="{{ asset('img/Edge-859x540.avif') }}">
                <img src="{{ asset('img/Edge-859x540.avif') }}" alt="">
            </picture>
            <div class="microsoft-edge-content">
                <div>
                    <div class="edge-title">Microsoft Edge</div>
                    <div class="edge-content">
                        在您瀏覽時提供世界級的效能，以及更多的隱私、更充足的生產力與更高的價值
                    </div>
                    <a href="">
                        <div class="download">立即下載</div>
                    </a>
                </div>
            </div>
        </section>

        <h1>適用於商務</h1>
        <section class="four-card container-normal">
            <div class="one-card">
                <a href="">
                    <img src="{{ asset('img/SurfaceFamilyForBusiness-380x213.avif') }}" alt="">
                    <div class="title">適用於商務的 Surface</div>
                    <div class="content"> 無論從事哪種工作，都有一款有助於成功的 Surface。 </div>
                    <p>立即選購</p>
                </a>
            </div>
            <div class="one-card">
                <a href="">
                    <img src="{{ asset('img/Business-Woman380x213.webp') }}" alt="">
                    <div class="title">免費試用 Microsoft 365</div>
                    <div class="content"> 透過一個月免費試用的 Microsoft 365 商務標準版，跨裝置取得 Microsoft Teams、安全雲端儲存空間和進階應用程式。 </div>
                    <p>開始免費試用</p>
                </a>
            </div>
            <div class="one-card">
                <a href="">
                    <img src="{{ asset('img/JIC-DPS-CP01.webp') }}" alt="">
                    <div class="title">歡迎使用 Windows 365 雲端電腦</div>
                    <div class="content"> 從 Microsoft 雲端安全地將您的 Windows 體驗串流到任何裝置。 </div>
                    <p>立即下載</p>
                </a>
            </div>
            <div class="one-card">
                <a href="">
                    <img src="{{ asset('img/Content-Card-Windows-11-Business.jfif') }}" alt="">
                    <div class="title">商務用 Windows 11</div>
                    <div class="content"> 專為混合式辦公而設計。 為員工帶來實用性。 為 IT 帶來一致性。 為所有人帶來安全性。 </div>
                    <p>深入了解</p>
                </a>
            </div>
        </section>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i
                class="fa-solid fa-arrow-right fa-rotate-270"></i>回到頁首</button>
    </main>

    <!-- <div>
    <span id="top">
      <i class="fa-solid fa-arrow-right fa-rotate-270"></i>回到頁首
    </span>
  </div> -->
    <div class="follow">
        <span>關注Microsoft</span>
        <img src="{{ asset('img/Facebook.avif') }} " alt="">
        <img src="{{ asset('img/YouTube.webp') }}" alt="">
    </div>

    <footer>
        <div class="container-full">
            <div class="footer-menu">
                <ul>
                    <p>最新動向</p>
                    <li><a>Microsoft 365</a></li>
                    <li><a>Surface Go</a></li>
                    <li><a>Surface Book 2</a></li>
                    <li><a>Surface Pro</a></li>
                    <li><a>Windows 11 應用程式</a></li>
                </ul>
                <ul>
                    <p>Microsoft Store</p>
                    <li><a>帳戶設定檔</a></li>
                    <li><a>下載中心</a></li>
                    <li><a>Microsoft Store 支援</a></li>
                    <li><a>退貨/退款</a></li>
                    <li><a>訂單追蹤</a></li>
                </ul>
                <ul>
                    <p>教育</p>
                    <li><a>Microsoft 教育</a></li>
                    <li><a>教育裝置</a></li>
                    <li><a>Microsoft Teams 教育版</a></li>
                    <li><a>Microsoft 365 教育版</a></li>
                    <li><a>Office 教育版</a></li>
                    <li><a>教育工作者訓練和發展</a></li>
                    <li><a>學生和家長優惠</a></li>
                    <li><a>Azure 學生版</a></li>
                </ul>
                <ul>
                    <p>商務</p>
                    <li><a>Microsoft Cloud</a></li>
                    <li><a>Microsoft 安全性</a></li>
                    <li><a>Azure</a></li>
                    <li><a>Dynamics 365</a></li>
                    <li><a>Microsoft 365</a></li>
                    <li><a>Microsoft Advertising</a></li>
                    <li><a>Microsoft 產業</a></li>
                    <li><a>Microsoft Teams</a></li>
                </ul>
                <ul>
                    <p>開發人員與IT</p>
                    <li><a>開發人員中心</a></li>
                    <li><a>文件</a></li>
                    <li><a>Microsoft Learn</a></li>
                    <li><a>Microsoft 技術社群</a></li>
                    <li><a>Azure Marketplace</a></li>
                    <li><a>AppSource</a></li>
                    <li><a>Microsoft Power Platform</a></li>
                    <li><a>Visual Studio</a></li>
                </ul>
                <ul>
                    <p>公司</p>
                    <li><a>人才招募</a></li>
                    <li><a>公司新聞</a></li>
                    <li><a>Microsoft 隱私權</a></li>
                    <li><a>投資者</a></li>
                    <li><a>永續性</a></li>
                </ul>
            </div>
            <div class="footer-nav">
                <a href="">
                    <div class="language">
                        <img src="{{ asset('img/world.png') }}" alt="">
                        <span>中文(台灣)</span>
                    </div>
                </a>
                <a href="">
                    <div class="private">
                        <img src="{{ asset('img/privacy.jpg') }}" alt="">
                        <span>您的隱私選擇</span>
                    </div>
                </a>
                <div class="another">
                    <ul>
                        <li><a href="">聯絡 Microsoft</a></li>
                        <li><a href="">隱私權</a></li>
                        <li><a href="">使用規定</a></li>
                        <li><a href="">商標</a></li>
                        <li><a href="">有關我們的廣告訊息</a></li>
                        <li>© Microsoft 2023</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>
