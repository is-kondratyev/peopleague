<?php 
  $theme_path = get_template_directory_uri();
	global $social_vk, $social_tg;
?>

<?php get_header(); ?>

<div class="loaderArea">
	<div class="loader"></div>
</div>

	<section class="b-main">
		<div class="b-main__wrap">
			<!--div class="b-main__img">
				<img src="<?= $theme_path ?>/img/m-img.png" alt="">
			</div-->
			<div class="b-main__img">
				<svg width="1001" height="693" viewBox="0 0 1001 693" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M380.809 506.907C314.279 512.773 267.841 451.83 267.841 451.83C267.841 451.83 262.571 479.205 200.982 419.892C206.581 431.95 199.994 439.446 199.994 439.446C188.796 428.691 119.961 373.94 46.8441 364.163C8.63909 358.948 -34.1769 365.792 -57.8903 375.569C131.159 375.569 189.125 546.992 344.909 534.282C367.964 532.653 380.809 506.907 380.809 506.907ZM-146.486 134.078C-146.486 134.078 -105.317 128.212 -104.329 91.3855C-104 77.3719 -115.527 66.2913 -115.527 66.2913C-118.491 96.274 -152.085 95.9481 -148.463 125.279C-172.835 73.787 -120.138 97.2517 -120.138 53.2553C-120.138 24.9021 -155.05 6.3259 -155.05 6.3259C-155.05 6.3259 -155.05 6.3259 -155.05 6.6518C-141.546 36.3086 -147.145 58.1438 -159.661 61.4028C-170.529 64.01 -157.026 42.5007 -164.272 45.1079C-170.529 47.7151 -189.632 72.1575 -189.632 90.4078C-189.302 118.109 -146.486 134.078 -146.486 134.078ZM411.768 35.005C400.899 12.8439 384.432 6 384.432 6C384.432 6 377.845 16.7547 375.21 28.1611C381.468 33.3755 387.067 37.2863 392.336 40.5453C392.007 40.5453 401.558 35.6568 411.768 35.005ZM904.152 115.502C905.799 107.355 911.398 99.533 906.457 98.8812C899.87 97.9035 892.624 105.073 887.684 112.569C890.319 112.243 899.211 112.895 904.152 115.502ZM814.238 135.382C804.358 127.56 811.603 116.48 807.322 114.524C802.381 112.243 792.501 136.685 801.723 152.003C803.699 148.092 810.615 138.641 814.238 135.382ZM878.133 530.371C879.78 533.63 884.391 542.756 886.367 547.318C894.601 542.43 909.421 546.015 909.751 541.778C909.751 537.541 890.648 529.394 878.133 530.371ZM823.131 482.138C817.861 482.138 807.651 489.96 805.016 505.929C810.286 502.344 816.873 500.715 824.448 500.715C821.155 488.982 830.706 482.138 823.131 482.138ZM961.459 205.776C960.142 204.147 958.825 202.843 957.837 201.539C949.932 192.414 938.075 210.99 937.087 206.428C936.099 201.865 943.345 199.584 959.483 189.807C967.717 184.593 967.717 178.401 961.789 168.949C963.765 156.565 984.844 162.106 981.879 156.565C977.927 149.396 962.118 144.833 945.65 150.047C943.345 147.766 944.004 148.418 941.698 147.114C940.71 146.462 939.722 145.811 938.734 145.159C923.913 136.685 916.338 171.883 913.044 169.275C909.751 166.668 923.254 145.159 919.631 136.36C917.326 130.493 906.457 122.346 894.601 119.739C888.672 118.109 882.414 118.109 876.815 120.391C867.594 123.975 872.204 136.36 877.803 148.744C880.768 155.262 884.391 164.713 886.037 169.927C926.548 185.57 927.207 203.821 927.207 203.821C927.207 203.821 896.906 175.793 885.708 180.682C880.109 182.963 881.756 187.2 882.085 198.932C882.414 216.205 883.073 237.388 871.216 256.29C861.994 271.608 866.935 291.487 877.803 298.657C885.049 303.546 893.612 301.264 901.517 292.465C908.433 282.688 914.362 270.956 919.631 257.92C919.631 257.92 938.405 259.875 963.106 247.817C976.28 241.299 976.28 231.522 971.999 222.071C980.891 213.598 988.137 223.7 988.796 219.464C990.442 211.968 982.209 202.517 961.459 205.776ZM879.78 600.766C879.78 596.529 879.121 594.899 877.474 591.64C873.193 583.167 810.286 591.64 811.604 583.493C812.921 573.064 894.271 594.573 885.379 564.591C883.732 559.376 882.085 554.814 880.438 550.903C877.474 543.081 874.51 536.889 871.875 532.327C865.288 521.246 859.689 518.965 854.749 522.876C846.515 529.068 837.622 546.666 833.67 543.733C829.718 540.8 852.114 521.246 842.563 513.751C837.622 510.166 833.999 508.862 824.778 508.21C817.532 507.884 809.957 509.514 804.358 514.402C802.382 516.032 800.735 517.987 799.417 520.594C788.549 539.822 817.861 541.778 797.771 555.14C777.68 568.502 772.74 572.738 750.673 564.917C666.359 535.26 581.385 450.526 481.262 449.548C535.605 427.387 648.573 500.715 648.573 500.715C651.538 497.13 653.514 490.612 654.502 484.42C654.502 484.42 661.748 487.679 667.347 487.679C723.666 487.679 744.415 405.878 755.284 407.507C767.799 409.463 742.11 431.298 751.002 429.017C806.992 415.003 798.1 359.926 812.921 361.556C823.46 362.533 800.735 374.918 817.202 391.864C826.095 363.185 856.066 370.029 842.233 322.448C841.904 321.47 863.312 330.595 888.014 308.434C887.684 308.434 887.025 308.434 886.696 308.434C882.414 308.434 878.133 307.131 874.181 304.523C860.348 295.398 853.431 271.282 865.288 251.728C875.827 234.455 875.169 214.575 874.839 198.28C874.51 186.222 874.51 175.793 878.792 168.949C874.839 165.039 873.193 157.543 869.899 149.396C866.276 140.596 860.348 131.471 846.515 127.56C838.281 125.279 825.436 135.056 815.885 145.811C810.615 152.003 806.004 158.195 804.028 163.083C803.37 164.387 803.04 165.365 802.711 166.342C800.076 178.075 824.448 182.637 837.623 199.584C850.797 216.531 831.035 237.388 787.561 269.652C746.391 300.287 684.802 322.122 637.375 329.944C669.323 353.408 668.664 387.628 668.993 387.954C659.772 367.748 632.435 332.877 604.44 319.841C597.853 316.908 635.399 326.033 648.573 311.041C592.254 302.568 593.571 262.808 533.3 270.956C540.875 265.09 538.24 255.313 529.347 247.491C529.347 247.491 515.844 254.661 503.658 253.031C488.837 251.076 475.663 243.254 469.076 219.464C459.195 218.812 449.973 218.812 441.41 218.812C420.331 218.812 403.534 218.812 392.336 208.057C383.773 199.584 375.869 176.771 379.821 163.735C379.821 163.735 391.019 195.673 397.606 202.517C406.169 210.99 421.649 210.99 441.081 210.99C495.753 210.99 505.963 224.026 516.503 224.026C527.371 224.026 555.696 204.147 545.815 196.325C544.168 195.021 528.689 182.311 492.46 187.852C507.939 173.512 500.364 150.047 492.789 150.699C487.52 151.351 490.154 170.253 470.393 174.816C463.806 154.284 484.885 111.917 496.741 111.917C510.904 111.917 517.161 130.493 529.347 132.775C530.006 136.36 525.066 144.507 525.066 144.507C536.593 147.766 540.545 142.226 543.509 136.685C551.414 137.011 558.989 132.123 567.882 120.391C582.044 101.488 566.235 100.185 567.552 91.0596C568.541 84.2157 572.822 85.1934 572.822 80.3049C572.822 72.1575 549.438 62.3805 521.443 59.4474C495.424 56.8402 501.023 23.5985 401.558 44.1302C396.947 45.1079 388.055 48.3669 388.055 48.3669C383.114 45.1079 377.845 41.1971 371.916 36.3086C344.909 14.1475 320.537 9.25899 315.926 13.8216C314.279 15.4511 312.303 19.3619 310.986 24.9021C371.258 42.5007 368.952 79.3272 368.952 79.3272C364.012 78.6754 361.377 75.0906 361.377 75.0906C352.484 78.3496 354.461 91.3855 354.461 91.3855C339.31 75.7424 363.024 68.5726 363.024 68.5726C352.155 51.2999 338.322 38.264 309.01 33.7014C303.081 57.1661 297.153 96.9258 304.399 137.337C272.122 159.172 279.368 192.414 253.678 211.316C275.416 226.634 297.153 196.977 298.47 195.021C297.812 195.999 275.416 227.611 272.451 253.683C267.84 291.162 280.356 312.997 292.213 321.144C290.566 310.064 294.518 297.354 299.458 291.813C309.01 280.407 325.807 286.599 328.442 299.309C331.735 309.412 324.819 321.144 321.525 330.269C309.01 360.904 313.291 394.471 340.957 408.485C340.957 408.485 299.129 399.034 305.716 355.364C309.668 328.64 324.16 322.448 321.196 304.197C319.878 296.376 308.351 291.162 303.411 298.657C295.177 311.041 300.117 336.787 300.117 336.787C281.673 329.618 272.451 311.693 265.535 294.746C209.545 282.688 78.1327 260.201 -43.3988 265.09C-179.751 270.63 -233.765 295.724 -364.189 276.17C-446.528 263.786 -428.413 227.611 -422.155 219.464C-399.759 189.807 -380.657 201.539 -332.901 211.316C-261.431 226.308 -176.787 219.464 -146.486 172.86C-130.348 148.092 -171.517 128.538 -171.517 128.538C-218.615 191.762 -270.323 179.704 -324.008 167.32C-369.788 156.891 -421.497 145.159 -460.031 196.325C-474.193 215.227 -477.816 243.906 -469.582 263.786C-457.726 292.791 -423.143 316.256 -371.764 321.47C-296.013 328.966 -265.054 319.515 -262.748 325.707C-257.149 341.024 -324.667 392.842 -392.843 392.842C-452.456 392.842 -458.384 335.158 -465.301 335.81C-486.709 337.113 -474.523 385.02 -491.649 390.235C-505.153 394.471 -493.955 368.074 -493.955 368.074C-534.465 385.672 -504.494 414.677 -513.386 421.195C-524.255 429.017 -523.926 396.427 -523.926 396.427C-552.909 410.766 -528.537 472.687 -533.477 465.517C-543.358 450.852 -555.214 473.339 -555.214 473.339C-521.62 487.353 -538.747 510.817 -546.322 521.572C-554.885 533.304 -574.317 549.599 -564.107 569.153C-553.897 588.707 -546.651 600.44 -550.933 606.958C-555.214 613.476 -572.011 645.088 -545.992 656.82C-543.028 658.124 -543.028 658.124 -540.393 659.101C-535.124 675.07 -550.933 679.633 -537.429 678.981C-525.573 678.655 -521.95 670.834 -519.644 663.664C-517.668 663.664 -516.021 663.664 -514.375 663.338C-508.117 662.36 -507.458 658.775 -507.458 654.865C-507.458 646.065 -509.105 609.239 -502.518 609.239C-498.236 609.239 -508.776 677.678 -468.265 677.678C-462.995 677.678 -458.384 677.352 -454.761 676.7C-446.857 678.981 -452.456 692.669 -446.857 692.995C-440.929 693.321 -437.306 678.004 -439.282 671.486C-437.964 670.508 -436.647 669.53 -435.659 668.552C-430.719 662.686 -433.024 655.516 -436.318 651.932C-442.905 645.088 -460.69 627.163 -457.396 623.904C-454.103 620.645 -424.132 664.968 -408.981 664.968C-397.125 664.968 -385.927 658.124 -381.645 644.436C-374.07 639.873 -369.788 644.762 -367.812 641.829C-365.507 638.896 -366.824 635.311 -379.998 628.141C-380.328 626.511 -380.328 624.882 -380.986 623.253C-384.939 609.239 -399.759 609.239 -406.346 609.239C-413.922 609.239 -418.533 615.431 -430.06 615.431C-441.587 615.431 -388.232 603.699 -397.783 577.301C-398.771 574.042 -400.418 571.435 -401.736 568.827C-406.346 560.68 -412.604 555.14 -418.203 552.858C-425.778 549.599 -432.036 551.555 -432.036 558.725C-432.036 573.39 -441.587 611.52 -456.079 607.283C-470.57 603.047 -477.487 561.006 -473.205 541.778C-467.936 518.313 -445.869 480.509 -438.294 482.79C-357.931 508.862 -320.056 490.612 -313.469 498.759C-306.882 506.907 -334.877 509.188 -334.877 509.188C-299.965 542.104 -264.066 485.071 -258.467 490.286C-252.868 495.5 -269.335 509.84 -269.335 509.84C-239.364 527.438 -194.243 495.826 -145.498 434.231C-138.582 425.432 -85.556 346.564 38.6103 352.431C106.128 355.364 178.586 408.485 193.406 422.173C193.406 422.173 190.113 395.449 162.447 380.458C198.017 386.324 222.06 443.356 262.241 446.615C262.241 446.615 249.726 432.602 250.714 417.284C250.714 417.284 309.998 495.826 365 496.478C388.713 496.804 399.911 479.857 399.911 479.857C399.911 479.857 406.169 516.684 342.274 554.814C376.527 567.198 392.336 560.028 400.57 567.524C408.804 575.345 372.575 567.524 383.773 576.323C423.295 608.261 478.956 562.635 484.555 579.582C489.496 595.225 473.687 597.181 460.842 587.404C453.267 630.748 543.18 600.766 565.576 605.654C582.373 609.239 545.815 622.275 583.032 634.007C587.313 619.668 606.087 606.306 660.101 614.453C697.318 619.994 676.239 637.592 698.306 644.436C713.127 648.999 753.967 642.806 760.224 649.65C766.482 656.494 778.01 677.678 793.16 677.678C800.406 677.678 810.286 670.182 818.52 662.035C831.035 658.45 822.143 678.004 829.718 673.767C837.293 669.53 839.598 654.213 831.035 647.369C833.341 644.11 834.658 641.503 834.329 640.525C833.67 635.637 787.89 617.06 792.501 614.127C802.711 607.935 838.94 641.829 857.054 639.547C865.617 638.57 872.534 631.4 876.815 622.601C891.966 617.712 893.942 634.659 898.882 630.748C905.469 625.534 896.906 605.654 879.78 600.766ZM441.081 56.5143L458.536 64.3359L463.147 45.7597L467.758 64.3359L485.214 56.5143L473.357 71.8316L490.484 80.6308L471.052 80.9567L475.004 99.533L462.489 84.8675L449.973 99.533L453.925 80.9567L434.493 80.6308L451.62 71.8316L441.081 56.5143ZM532.641 184.918C535.934 185.896 540.545 187.526 543.839 189.481C553.39 177.749 541.863 173.512 541.863 173.512C541.863 173.512 540.216 180.682 532.641 184.918ZM-412.934 550.251C-408.323 552.207 -404.7 554.814 -399.101 563.613C-392.184 552.532 -384.28 559.376 -383.95 556.117C-383.621 550.251 -402.065 540.8 -412.934 550.251Z" fill="#AC004D"/>
					<g class="b-dot" filter="url(#filter0_f_401_15)">
						<path d="M572.5 66L573.457 76.1903L581.339 69.6612L574.81 77.5433L585 78.5L574.81 79.4567L581.339 87.3388L573.457 80.8097L572.5 91L571.543 80.8097L563.661 87.3388L570.19 79.4567L560 78.5L570.19 77.5433L563.661 69.6612L571.543 76.1903L572.5 66Z" fill="white"/>
					</g>

					<g class="b-dot" filter="url(#filter3_f_401_15)">
						<path d="M644.5 298L645.457 308.19L653.339 301.661L646.81 309.543L657 310.5L646.81 311.457L653.339 319.339L645.457 312.81L644.5 323L643.543 312.81L635.661 319.339L642.19 311.457L632 310.5L642.19 309.543L635.661 301.661L643.543 308.19L644.5 298Z" fill="white"/>
					</g>
					<g class="b-dot" filter="url(#filter4_f_401_15)">
						<path d="M906.5 86L907.457 96.1903L915.339 89.6612L908.81 97.5433L919 98.5L908.81 99.4567L915.339 107.339L907.457 100.81L906.5 111L905.543 100.81L897.661 107.339L904.19 99.4567L894 98.5L904.19 97.5433L897.661 89.6612L905.543 96.1903L906.5 86Z" fill="white"/>
					</g>
					<g class="b-dot" filter="url(#filter5_f_401_15)">
						<path d="M987.5 206L988.457 216.19L996.339 209.661L989.81 217.543L1000 218.5L989.81 219.457L996.339 227.339L988.457 220.81L987.5 231L986.543 220.81L978.661 227.339L985.19 219.457L975 218.5L985.19 217.543L978.661 209.661L986.543 216.19L987.5 206Z" fill="white"/>
					</g>
					<g class="b-dot" filter="url(#filter6_f_401_15)">
						<path d="M781.5 399.661L782.457 409.852L790.339 403.322L783.81 411.205L794 412.161L783.81 413.118L790.339 421L782.457 414.471L781.5 424.661L780.543 414.471L772.661 421L779.19 413.118L769 412.161L779.19 411.205L772.661 403.322L780.543 409.852L781.5 399.661Z" fill="white"/>
					</g>
					<g class="b-dot" filter="url(#filter7_f_401_15)">
						<path d="M909.5 529L910.457 539.19L918.339 532.661L911.81 540.543L922 541.5L911.81 542.457L918.339 550.339L910.457 543.81L909.5 554L908.543 543.81L900.661 550.339L907.19 542.457L897 541.5L907.19 540.543L900.661 532.661L908.543 539.19L909.5 529Z" fill="white"/>
					</g>
					<g class="b-dot" filter="url(#filter8_f_401_15)">
						<path d="M582.5 620L583.457 630.19L591.339 623.661L584.81 631.543L595 632.5L584.81 633.457L591.339 641.339L583.457 634.81L582.5 645L581.543 634.81L573.661 641.339L580.19 633.457L570 632.5L580.19 631.543L573.661 623.661L581.543 630.19L582.5 620Z" fill="white"/>
					</g>
					<g class="b-dot" filter="url(#filter9_f_401_15)">
						<path d="M344.5 542L345.457 552.19L353.339 545.661L346.81 553.543L357 554.5L346.81 555.457L353.339 563.339L345.457 556.81L344.5 567L343.543 556.81L335.661 563.339L342.19 555.457L332 554.5L342.19 553.543L335.661 545.661L343.543 552.19L344.5 542Z" fill="white"/>
					</g>
					<g class="b-dot" filter="url(#filter10_f_401_15)">
						<path d="M123.5 424L124.457 434.19L132.339 427.661L125.81 435.543L136 436.5L125.81 437.457L132.339 445.339L124.457 438.81L123.5 449L122.543 438.81L114.661 445.339L121.19 437.457L111 436.5L121.19 435.543L114.661 427.661L122.543 434.19L123.5 424Z" fill="white"/>
					</g>
					<g class="b-dot" filter="url(#filter2_f_401_15)">
						<path d="M30.5 252L31.4567 262.19L39.3388 255.661L32.8097 263.543L43 264.5L32.8097 265.457L39.3388 273.339L31.4567 266.81L30.5 277L29.5433 266.81L21.6612 273.339L28.1903 265.457L18 264.5L28.1903 263.543L21.6612 255.661L29.5433 262.19L30.5 252Z" fill="white"/>
					</g>
					<g class="b-dot" filter="url(#filter1_f_401_15)">
						<path d="M316.5 1L317.457 11.1903L325.339 4.66117L318.81 12.5433L329 13.5L318.81 14.4567L325.339 22.3388L317.457 15.8097L316.5 26L315.543 15.8097L307.661 22.3388L314.19 14.4567L304 13.5L314.19 12.5433L307.661 4.66117L315.543 11.1903L316.5 1Z" fill="white"/>
					</g>
					<defs>
						<filter id="filter0_f_401_15" x="559" y="65" width="27" height="27" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
							<feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur_401_15"/>
						</filter>
						<filter id="filter1_f_401_15" x="303" y="0" width="27" height="27" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
							<feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur_401_15"/>
						</filter>
						<filter id="filter2_f_401_15" x="17" y="251" width="27" height="27" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
							<feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur_401_15"/>
						</filter>
						<filter id="filter3_f_401_15" x="631" y="297" width="27" height="27" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
							<feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur_401_15"/>
						</filter>
						<filter id="filter4_f_401_15" x="893" y="85" width="27" height="27" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
							<feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur_401_15"/>
						</filter>
						<filter id="filter5_f_401_15" x="974" y="205" width="27" height="27" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
							<feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur_401_15"/>
						</filter>
						<filter id="filter6_f_401_15" x="768" y="398.661" width="27" height="27" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
							<feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur_401_15"/>
						</filter>
						<filter id="filter7_f_401_15" x="896" y="528" width="27" height="27" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
							<feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur_401_15"/>
						</filter>
						<filter id="filter8_f_401_15" x="569" y="619" width="27" height="27" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
							<feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur_401_15"/>
						</filter>
						<filter id="filter9_f_401_15" x="331" y="541" width="27" height="27" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
							<feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur_401_15"/>
						</filter>
						<filter id="filter10_f_401_15" x="110" y="423" width="27" height="27" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
							<feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur_401_15"/>
						</filter>
					</defs>
				</svg>

			</div>
			<div class="container d-flex align-items-end flex-column">
				<div class="b-main__btn pulse">
					<!-- <a href="#single-video" data-fancybox-type="iframe" class="btn-wrap fancybox-single"> -->
					<a href="#" data-fancybox-type="iframe" class="btn-wrap">
						<i class="icon-i-mplay"></i>
						<span class="btn-wrap__arrows"></span>
					</a>

				</div>
				<div class="b-main__logo">
					<img src="<?= $theme_path ?>/img/promo-logo.png" alt="">
				</div>
			</div>
			<!--<div class="b-main__background"><img src="<?= $theme_path ?>/img/m-img2.png" alt=""></div>-->
		</div>
		<div class="social">
			<ul>
			<?php
				if ($social_vk != null) { ?>
				<li><a href="<?= $social_vk ?>"><i class="icon-i-vk"></i></a></li>
			<?php 
				}
				if ($social_tg != null) { ?>				
				<li><a href="<?= $social_tg ?>"><i class="icon-i-telegram"></i></a></li>
			<?php 
				} 
			?>				
				<!-- <li><a href=""><i class="icon-i-inst"></i></a></li> -->
			</ul>
		</div>
	</section>

	<section id="info" class="b-info">
		<div class="container d-flex justify-content-center align-items-end">
			<div class="b-info__left">
				<div class="b-title">Лига успешных людей</div>
				<p>Закрытый клуб для успешных людей — предпринимателей
					и менеджеров компаний, спортсменов и представителей
					творческих сфер, которые готовы к новым знакомствам
					или просто хотят отвлечься от будничной суеты.</p>
				<p>С одной стороны, в клубе люди могут отдохнуть на активных или спортивных мероприятиях, которые клуб организовывает. С другой, завести новые знакомства, поделиться опытом или найти бизнес партнёров.</p>
			</div>
			<div class="b-info__img"><img src="<?= $theme_path ?>/img/info-img.png" alt=""></div>
		</div>
	</section>

	<section id="principles" class="b-principles">
		<div class="container">
			<div class="b-title">ПРИНЦИПЫ ЛИГИ</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
					<div class="b-principles__item">
						<div class="b-principles__item-img icon-i-p1"></div>
						<b>Уважение</b>
						<p>Все участники лиги равны между собой не зависимо от статуса или возраста.</p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
					<div class="b-principles__item">
						<div class="b-principles__item-img icon-i-p2"></div>
						<b>Развитие</b>
						<p>Резиденты лиги делятся собственным успешным опытом и открыты к общению с другими профессионалами
							в различных областях.</p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
					<div class="b-principles__item">
						<div class="b-principles__item-img icon-i-p3"></div>
						<b>Открытость</b>
						<p>Участники лиги всегда открыты к диалогу с людьми, которые мыслят смело и масштабно.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="b-cont" class="b-contacts">
		<div class="container d-flex justify-content-between align-content-start">
			<div class="b-contacts__left">
				<div class="b-title">СЛЕДИ ЗА НАМИ В СОЦИАЛЬНЫХ СЕТЯХ</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<img src="<?= $theme_path ?>/img/c1.png" alt="">
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<img src="<?= $theme_path ?>/img/c2.png" alt="">
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<img src="<?= $theme_path ?>/img/c3.png" alt="">
					</div>
				</div>
				<div class="b-contacts__left-bottom">
					<div class="b-contacts__left-block">
					  <i class="icon-i-vk"></i>
						<!-- <img src="<?= $theme_path ?>/img/insta.svg" alt=""> -->
						<span>Подпишись на нас<br/> во Вконтакте</span>
					</div>
					<a target="blank" href="https://vk.com/league_people" class="btn-subscribe ripple">ПОДПИСАТЬСЯ</a>
				</div>
			</div>
			<div class="b-contacts__right">
				<div class="b-modal__top">
					<b>хочу подать заявку и вступить в клуб</b>
					<span>Есть вопрос или бизнес предложение напишите нам.</span>
				</div>
				<div class="b-modal__form">
					<form action="">
						<div class="b-input">
							<div class="b-input__ico"><i class="icon-i-user"></i></div>
							<input type="text" class="b-input__text" placeholder="Ваше имя">
						</div>
						<div class="b-input">
							<div class="b-input__ico"><i class="icon-i-phone-fill"></i></div>
							<input type="text" class="b-input__text" placeholder="Телефон">
						</div>
						<div class="b-checkbox">
							<input type="checkbox" id="a3" name="a3">
							<label for="a3"><span class="icon-checkmark"></span><i>Даю согласие на обработку данных</i></label>
						</div>
						<button class="pink-btn pink-btn_big ripple" type="submit">ОТПРАВИТЬ</button>
					</form>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>

</body>
</html>