<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<footer id="custom_footer">
    <div class="castleImage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/castleSketch.webp" alt="">
    </div>
    <div class="footer_container">
        <div class="footer_wrapper">
            <div class="footer_logo">
                <img src="https://alex.techhunter2024.online/wp-content/uploads/2026/02/Turin-Castle-Logo-1-1.webp"
                    width="200" height="auto" alt="logo">
            </div>

            <div class="underline"></div>

            <div class="address">
                <ul>
                    <li>
                        <a href="tell:+44 (0)1307 830463" class="line_effect">+44 (0)1307 830463</a>
                    </li>
                    <li>
                        <a href="mailto:yvonne@turincastlescotland.com"
                            class="line_effect">yvonne@turincastlescotland.com</a>
                    </li>
                    <li class="line_effect">
                        <p>Turin Castle, Angus, DD8 2UF Scotland</p>
                    </li>
                </ul>
            </div>

            <div class="footer_menu">
                <!-- <ul>
                        <li><a href=""> THE CASTLE</a></li>
                        <li><a href="">EXPERIENCES</a></li>
                        <li><a href="">ADVENTURES</a></li>
                        <li><a href="">SPORTING</a></li>
                        <li><a href="">SIGNATURE wEDDINGS</a></li>
                        <li><a href="">CONTACT</a></li>
                    </ul> -->
                <ul>
                    <li>
                        <a href="https://turincastle.previewmysite.online/the-castle/">
                            <div class="linkBox">
                                <div class="linkText">The Castle</div>
                                <div class="linkHoverText">The Castle</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://turincastle.previewmysite.online/exprience/">
                            <div class="linkBox">
                                <div class="linkText">Experiences</div>
                                <div class="linkHoverText">Experiences</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://turincastle.previewmysite.online/the-castle/">
                            <div class="linkBox">
                                <div class="linkText">Adventure</div>
                                <div class="linkHoverText">Adventure</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://turincastle.previewmysite.online/sporting/">
                            <div class="linkBox">
                                <div class="linkText">Sporting</div>
                                <div class="linkHoverText">Sporting</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://turincastle.previewmysite.online/signuture-wedding/">
                            <div class="linkBox">
                                <div class="linkText">Signature Weddings</div>
                                <div class="linkHoverText">Signature Weddings</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://turincastle.previewmysite.online/the-castle/">
                            <div class="linkBox">
                                <div class="linkText">Contact</div>
                                <div class="linkHoverText">Contact</div>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>

            <div class="social_media">
                <ul>
                    <li><a href=""><svg width="40" height="40" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_214_2)">
                                    <path d="M0 0V50H50V0H0ZM47.0703 47.0703H2.92969V2.92969H47.0703V47.0703Z"
                                        fill="black" />
                                    <path
                                        d="M21.5527 37.4902H26.3965V24.502H30.2344L30.5176 20.7617H26.3965V17.8418C26.3965 16.8359 27.2949 16.4746 28.3008 16.4746C29.3066 16.4746 30.3809 16.7871 30.3809 16.7871L31.0254 12.959C31.0254 12.959 29.6582 12.4902 26.3965 12.4902C24.3945 12.4902 23.2324 13.252 22.3828 14.375C21.582 15.4395 21.5527 17.1484 21.5527 18.252V20.7617H18.9648V24.502H21.5527V37.4902Z"
                                        fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_214_2">
                                        <rect width="50" height="50" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a></li>
                    <li><a href="">
                            <svg width="40" height="40" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_214_6)">
                                    <path d="M0 0V50H50V0H0ZM47.0703 47.0703H2.92969V2.92969H47.0703V47.0703Z"
                                        fill="black" />
                                    <path
                                        d="M12.5 34.0918C14.7754 35.5469 17.4707 36.3965 20.3711 36.3965C29.8242 36.3965 34.9902 28.5645 34.9902 21.7773C34.9902 21.5527 34.9902 21.3281 34.9805 21.1133C35.9863 20.3809 36.8555 19.4824 37.5391 18.4473C36.6211 18.8574 35.625 19.1309 34.5898 19.2578C35.6543 18.623 36.4648 17.6172 36.8457 16.416C35.8496 17.002 34.7559 17.4316 33.584 17.666C32.6465 16.6699 31.3086 16.0449 29.834 16.0449C27.002 16.0449 24.6973 18.3496 24.6973 21.1816C24.6973 21.582 24.7363 21.9727 24.834 22.3535C20.5664 22.1387 16.7773 20.0977 14.248 16.9824C13.8086 17.7441 13.5547 18.623 13.5547 19.5703C13.5547 21.3477 14.4629 22.9199 15.8398 23.8477C15 23.8184 14.209 23.584 13.5156 23.2031V23.2617C13.5156 25.752 15.2832 27.832 17.6367 28.3008C17.207 28.418 16.748 28.4863 16.2793 28.4863C15.9473 28.4863 15.625 28.457 15.3125 28.3984C15.9668 30.4395 17.8613 31.9238 20.1074 31.9629C18.3496 33.3398 16.1328 34.1602 13.7305 34.1602C13.3203 34.1602 12.9102 34.1406 12.5 34.0918Z"
                                        fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_214_6">
                                        <rect width="50" height="50" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </a></li>
                    <li><a href="">
                            <svg width="40" height="40" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_214_10)">
                                    <path d="M0 0V50H50V0H0ZM47.0703 47.0703H2.92969V2.92969H47.0703V47.0703Z"
                                        fill="black" />
                                    <path
                                        d="M19.9805 36.377C19.9414 35.5078 19.9707 34.4531 20.1953 33.5059C20.4395 32.4902 21.8066 26.6992 21.8066 26.6992C21.8066 26.6992 21.4062 25.8984 21.4062 24.7266C21.4062 22.8711 22.4805 21.4941 23.8184 21.4941C24.9512 21.4941 25.5078 22.3438 25.5078 23.3691C25.5078 24.5117 24.7754 26.2207 24.4043 27.8027C24.0918 29.1309 25.0684 30.2051 26.377 30.2051C28.75 30.2051 30.3418 27.168 30.3418 23.5645C30.3418 20.8301 28.4961 18.7793 25.1367 18.7793C21.3477 18.7793 18.9844 21.6016 18.9844 24.7656C18.9844 25.8594 19.3066 26.6211 19.8047 27.2168C20.0391 27.4902 20.0684 27.5977 19.9805 27.9102C19.9219 28.1348 19.7852 28.6914 19.7266 28.916C19.6387 29.2285 19.3848 29.3457 19.1016 29.2285C17.3535 28.5156 16.543 26.6016 16.543 24.4531C16.543 20.8984 19.541 16.6406 25.4785 16.6406C30.2539 16.6406 33.3887 20.0977 33.3887 23.7988C33.3887 28.7012 30.6641 32.3633 26.6406 32.3633C25.293 32.3633 24.0234 31.6309 23.584 30.8105C23.584 30.8105 22.8613 33.6914 22.7051 34.248C22.4414 35.2148 21.9238 36.1719 21.4453 36.9238C22.5684 37.2559 23.7598 37.4414 24.9902 37.4414C31.8945 37.4414 37.4902 31.8457 37.4902 24.9414C37.5 18.0273 31.9043 12.4316 25 12.4316C18.0957 12.4316 12.5 18.0273 12.5 24.9316C12.5 30.0488 15.5762 34.4434 19.9805 36.377Z"
                                        fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_214_10">
                                        <rect width="50" height="50" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </a></li>
                    <li><a href="">
                            <svg width="40" height="40" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_214_20)">
                                    <path d="M0 0V50H50V0H0ZM47.0703 47.0703H2.92969V2.92969H47.0703V47.0703Z"
                                        fill="black" />
                                    <path d="M35.0977 17.8027H28.4766V19.7266H35.0977V17.8027Z" fill="black" />
                                    <path
                                        d="M27.9102 31.5141C29.0723 32.4516 30.4102 32.9203 31.9336 32.9203C33.7793 32.9203 35.2051 32.3637 36.2305 31.2504C36.8848 30.5473 37.2559 29.8539 37.334 29.1801H34.2871C34.1113 29.5219 33.9062 29.7855 33.6719 29.9711C33.2422 30.3226 32.6855 30.4984 32.0117 30.4984C31.3672 30.4984 30.8203 30.3519 30.3613 30.0687C29.6094 29.6098 29.2188 28.7992 29.1699 27.6566H37.4902C37.5098 26.6703 37.4707 25.9184 37.3926 25.391C37.2559 24.4926 36.9531 23.7016 36.4844 23.0277C35.9668 22.2562 35.3125 21.6898 34.5117 21.3383C33.7207 20.9769 32.8223 20.8012 31.8164 20.8109C30.1465 20.8109 28.7891 21.3383 27.7344 22.393C26.6895 23.4477 26.1621 24.9613 26.1621 26.9437C26.1621 29.0531 26.748 30.5766 27.9102 31.5141ZM30.0488 23.9164C30.4688 23.4867 31.0645 23.2621 31.8262 23.2621C32.5293 23.2621 33.125 23.4672 33.6035 23.8773C34.0723 24.2875 34.3359 24.893 34.3945 25.684H29.248C29.3652 24.9418 29.6289 24.3559 30.0488 23.9164Z"
                                        fill="black" />
                                    <path
                                        d="M21.6406 32.334C22.3145 32.1875 22.9004 31.9336 23.3887 31.5527C23.8281 31.2305 24.1895 30.8203 24.4824 30.3418C24.9512 29.6191 25.1758 28.7988 25.1758 27.8809C25.1758 26.9922 24.9707 26.2402 24.5703 25.6152C24.1699 24.9902 23.5742 24.541 22.7832 24.248C23.3008 23.9844 23.7012 23.6914 23.9648 23.3691C24.4434 22.793 24.6777 22.0313 24.6777 21.0938C24.6777 20.1758 24.4434 19.3848 23.9746 18.7305C23.1836 17.6563 21.8457 17.1094 19.9707 17.0801H12.5V32.5391H19.4531C20.2441 32.5391 20.9668 32.4707 21.6406 32.334ZM15.5762 19.7656H18.9355C19.6777 19.7656 20.2832 19.8535 20.7617 20.0098C21.3184 20.2441 21.5918 20.7129 21.5918 21.4355C21.5918 22.0801 21.3867 22.5391 20.9668 22.793C20.5469 23.0469 20.0098 23.1738 19.3359 23.1738H15.5762V19.7656ZM15.5762 29.8438V25.7227H19.3848C20.0488 25.7324 20.5566 25.8203 20.9277 25.9863C21.5918 26.2891 21.9141 26.8457 21.9141 27.6465C21.9141 28.5938 21.582 29.2285 20.8984 29.5703C20.5273 29.7559 20.0098 29.8438 19.3359 29.8438H15.5762Z"
                                        fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_214_20">
                                        <rect width="50" height="50" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </a></li>
                </ul>

            </div>

            <div class="footer_separator"></div>


            <div class="footnote">
                <div> <a href="TERMS & CONDITION">TERMS & CONDITION</a></div>
                <div>
                    <p class="line_effect"> © 2026 Turin Castle. All rights reserved.</p>
                </div>

            </div>


        </div>

    </div>
</footer>

</body>

<?php wp_footer(); ?>