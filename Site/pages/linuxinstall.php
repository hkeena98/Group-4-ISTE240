<!--Pull page head via php-->
<?php
    $path = './';
    include $path.'../assets/inc/header.php';
?>

<!--Pull page nav bar via php-->
<?php
    $path = './';
    include $path.'../assets/inc/navigation.php';
?>
    <div id="hero">
            <div id="heroText">
                <h1>
                    Installing Linux
                </h1>
            </div>
    </div>
    <div id="back"></div>
    <div id="main">
        <div id="mainText">
        <h1>
            Linux Distribution <br>&<br> Installation Guides
        </h1>
        <p>
             Because the Linux Kernel is open source software, virtually anybody with the right amount of time and knowledge could create their own version, or distribution, of Linux. Some distributions, or flavors as they are sometimes called, are used by only a few individuals for specialized purposes, while many others are used by a much wider community for day to day use. Here are some of the most common Linux distributions, and how you yourself can install them:
        </p>
            
        <div id="quickLinks">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#db">Debian</a></li>
                <li><a href="#ub">Ubuntu</a></li>
                <li><a href="#lm">Linux Mist</a></li>
                <li><a href="#fd">Fedora</a></li>
                <li><a href="#al">Arch Linux</a></li>
            </ul>
        </div>
        <br><br><br><br><br>
        <div id="picBox"><img id="pic" src="../assets/images/debianlinux.png" alt="Debian" title="Debian"></div>
        <h2 id="db">Debian:</h2>
            <p>
            Debian is one of the most well known Linux distributions, as it is the distribution that many other versions of Linux are based on. Initially released in 1993, Debian was designed to be a universal operating system utilizing the Linux Kernel that would allow Linux to be used in a far more reliable and stable manner, all while remaining free and without cost. It is also well known for choosing to not include proprietary software, or non open source software, instead including only default open source applications. Debian is well known for being one of the most well coded and maintained distributions of Linux available, and has been credited with having the far fewer bugs and issues with each release/update than other versions of Linux. While well known for its reliability and performance stability, Debian is known to not always be very user friendly. This has made Debian the choice of intermediate level Linux users, and those seeking to step away from distributions of Linux that include more proprietary software.
            Installation: Installing Debian can range from beginner to intermediate difficulty as Debian allows the user to install the operating system with both graphical installers, as well as a text based installer. This allows for new Linux users to install Debian, while also allowing more 
            advanced users to install Debian via the command line should they choose.
            For a complete guide to installing Debian, look <a href="https://www.debian.org/releases/stretch/installmanual">here</a>
        </p>
        <div id="picBox"><img id="pic" src="../assets/images/debianinstall.png" alt="Debian" title="Debian"></div>
        <br><br><br><br>
        <div id="picBox"><img id="pic" src="../assets/images/ubuntulinux.png" alt="Ubuntu" title="Ubuntu"></div>
        <h2 id="ub">Ubuntu:</h2>
            <p>
                Ubuntu is the most widely known, and widely used Linux distribution. Based upon Debian, it was first released in 2004 as a user-friendly alternative to its predecessor. Utilizing all of the key concepts from Debian, stability, ease of use, reliability, etc. Ubuntu has managed to become the most popular Linux distribution to date. It simple desktop environment as well as user experience design has made it possible to use it on a daily basis as the primary operating system of choice for millions without requiring users to have any prior experience with the command line, or with programming. Ubuntu separates from Debian in that unlike the latter it was not opposed to the use of proprietary and non open source software, and while Ubuntu is still free to use, it does include some copyrighted software that is not open source to all users or parties. 
                Installation: Installing Ubuntu is the simplest of all modern Linux distributions as it includes a step-by-step installation manager that gives the user a simple, quick, and manageable way to install the operating system. 
                For a full guide to installing Ubuntu, go 
                <a href="https://tutorials.ubuntu.com/tutorial/tutorial-install-ubuntu-desktop#0">here</a>
            </p>
            <div id="picBox"><img id="pic" src="../assets/images/ubuntuinstall.png" alt="Installing Ubuntu" title="Installing Ubuntu"></div>
            <br><br><br><br>
            <div id="picBox"><img id="pic" src="../assets/images/linuxmint.png" alt="Linux Mint" title="Linux Mint"></div>
            <h2 id="lm">Linux Mint:</h2>
                <p>
                    Linux Mint was initially released in 2006 as an operating system that was meant to appeal more to non Linux users, primarily those using Windows. While also based on Debian, Linux Mint differs from both Debian and Ubuntu in that it is designed to resemble a Windows machine to the user. This design strategy was in part due to the success of Ubuntu’s user experience, while also keeping with the philosophy of Debian. As a result, Mint was meant to mimic the experience of Windows, and allow Windows users to retain a similar experience on Linux, while also giving greater freedom and using an open source software driven mentality. This has led to many looking at Linux Mint as a sort of starting point for new Linux users, as it allows one to become familiar with using Linux, while also still feeling like one is using a Windows machine.
                    Installation: Installation for Linux Mint is extremely similar to the installation process of Ubuntu, as the installer for Mint is in essence the installer for Ubuntu. 
                    For a complete guide to installing Linux Mint, go
                     <a href="https://linuxmint-installation-guide.readthedocs.io/en/latest/">here</a>
                </p>
            <div id="picBox"><img id="pic" src="../assets/images/mintinstall.jpg" alt="Installing Mint" title="Installing Mint"></div>
            <br><br><br><br>
            <div id="picBox"><img id="pic" src="../assets/images/fedoralinux.png" alt="Fedora" title="Fedora"></div>
            <h2 id="fd">Fedora:</h2>
            <p>
            Unlike, the previous two distributions, Fedora is not based on Debian, and was first released in 2003 as the successor to Red Hat Linux, a version of Linux designed primarily for use in offices and workplace environments. Fedora, while also suitable for personal computers, is primarily designed to be used for office and business workstations. For these reasons Fedora was designed to include both proprietary and optimized open source software so as to allow businesses a far more work oriented computing model. Fedora is fast, efficient, stable, mostly user friendly, and one of the most popular Linux distributions, with an estimated 1.2 million users. It is also one of the few versions of Linux that are not free(depending on whether you install the business version, or home version). Businesses use Fedora for it excellent optimization out of the box that allows many technology companies to do very complex tasks in simple ways.
            Installation: Installing Fedora is a simple task as it includes a graphical installation guide on startup. One of Fedora’s many attractions is it compatibility with many types of hardware, as well as allowing custom configuration during installation that can allows for a totally optimized operating system on many different hardware types.
            For a complete installation guide for Fedora, go 
             <a href="https://docs.fedoraproject.org/en-US/fedora/f28/install-guide/">here</a>
        </p>
            <div id="picBox"><img id="pic" src="../assets/images/fedorainstall.png" alt="Installing Fedora" title="Installing Fedora"></div>
            <br><br><br><br>
            <div id="picBox"><img id="pic" src="../assets/images/archlinux.png" alt="Arch Linux Logo" title="Arch Linux Logo"></div>
            <h2 id="al">Arch Linux:</h2>
            <p>
            Arch Linux is perhaps one of the most well known Linux distributions despite having far fewer users than any of the other distributions on this list. Arch Linux was first released in 2002 with the design style of minimalism, stability, and freedom of choice and use by the user. The primary demographic of those who use Arch Linux are primarily developers and advanced Linux users. For good reason as well, Arch Linux is by far one of the least user friendly distributions available. Arch Linux was created with the intent of allowing the user the maximum control, power, and freedom over their machine as possible, allowing one to essentially design their system from the ground up. Upon installing Arch the user must manually configure the operating system to their hardware via the command line as, initially, there is no desktop environment. Arch Linux comes only with the Linux Kernel, a bash command line, a wireless interface for connection to the internet, and a package manager. This leaves installation of a desktop, system applications, user programs, and even system drivers up to the user to manually install on their own. While this is indeed challenging, it allows the user to essentially build their own operating system, and run their machine however they like, using whatever programs or applications they so choose.
            Installation: Installing Arch Linux can be very technically challenging, and is not a simple or quick process as it requires the user to make changes at the most base levels of the system’s hardware. It is not recommended for first time users to attempt to install Arch Linux, as making some mistakes could result in system wide problems. 
            For a complete guide to installing Arch Linux, go 
            <a href="https://wiki.archlinux.org/index.php/installation_guide">here</a>
        </p>
        <div id="picBox"><img id="pic" src="../assets/images/archinstall.png" alt="Installing Arch Linux" title="Installing Arch Linux"></div>
        <br><br><br><br>
        </div>
    </div>
<!--Pull footer content via php-->
<?php 
    include $path.'../assets/inc/footer.php';
?>