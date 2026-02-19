<?php get_header(); ?>
<main>
<section class="hero" id="hero">
    <div class="container hero-inner">
        <div class="hero-image">
            <div class="photo-placeholder">
                عکس
            </div>
        </div>
        <div class="hero-content">
            <h1>پوریا - توسعه دهنده وردپرس</h1>
            <p>متخصص طراحی قالب های سفارشی ، پیاده سازی ساختار تمیز و مدیریت بهینه منابع</p>
            <div class="hero-buttons">
                <a href="#" class="btn primary">دانلود رزومه</a>
                <a href="#contact" class="btn secondary">تماس با من</a>
            </div>
        </div>
    </div>
</section>
<section class="skills" id="skills">
    <div class="container">
        <h2>مهارت ها</h2>
        <div class="skills-grid">
            <div class="skill-box">
                <i class="fa-brands fa-html5 skill-icon"></i>
                <h3>front-end</h3>
                <p>HTML , CSS , Responsive Design</p>
            </div>
            <div class="skill-box">
                <i class="fa-brands fa-wordpress skill-icon"></i>
                <h3>WordPress</h3>
                <p>Theme Developmrnt , customization</p>
            </div>
            <div class="skill-box">
                <i class="fa-solid fa-code skill-icon"></i>
                <h3>Tools</h3>
                <p>Git , VS Code</p>
            </div>
        </div>
    </div>
</section>
<section id="projects" class="projects-section">
    <div class="container">
        <h2>پروژه ها</h2>
        <div class="projects-grid">
            <?php 
            $projects = [
                [
                    'title' => 'وب سایت شرکتی',
                    'image' => 'officeweb.jpg',
                    'link' => '#'
                ],
                [
                    'title' => 'فروشگاه آنلاین',
                    'image' => 'onlineshop.jpg',
                    'link' => '#'
                ],
                [
                    'title' => 'روزمه شخصی',
                    'image' => 'personalresume.jpg',
                    'link' => '#'
                ],
            ];
            foreach($projects as $project): ?>
            <div class="project-card">
                <img src="<?php echo get_template_directory_uri().'/assets/images/'.$project['image']; ?> " alt="<?php echo $project['title']; ?>">
                <h3><?php echo $project['title']; ?></h3>
                <a href="<?php echo $project['link']; ?>" class="btn">مشاهده پروژه</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section id="about" class="about-section">
    <div class="container">
        <div class="about-wrapper">
            <div class="about-content">
            <div class="about-background-text" aria-hidden="true">
                DEVELOPER
            </div>
                <h2>درباره من</h2>
                <p class="about-main">من پوریا هستم . تمرکزم ساخت سیستم هایی است که ساختار دارند ، نه فقط ظاهر .</p>
                <p>توسعه برای من یعنی درک منطق پشت هر بخش . از معماری قالب وردپرس تا جزئیات تجربه کاربری .</p>
                <p class="about-focus">در حال عمیق تر شدن در PHP . توسعه قالب اختصاصی و طراحی مینیمال مدرن</p>
            </div>
            <div class="about-illustration">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/programmer.png" alt="برنامه نویس">
            </div>
        </div>
    </div>
</section>
<section id="contact" class="contact-section">
    <div class="container">
        <h2>تماس با من</h2>
        <div class="contact-wrapper">
            <form class="contact-form" action="#" method="post">
            <input type="text" name="name" placeholder="نام و نام خانوادگی" required>
            <input type="email" name="email" placeholder="ایمیل" required>
            <textarea name="messag" placeholder="پیام شما" rows="5" required></textarea>
            <button type="submit">ارسال</button>
            </form>
            <div class="contact-info">
                <p><strong>ایمیل :</strong>pourya.huseyni@gmail.com</p>
                <p><strong>تلفن :</strong>09305202998</p>
                <p><strong>آدرس :</strong>تهران ، تهرانسر</p>
            </div>
        </div>
    </div>
</section>
</main>
<?php get_footer();?>