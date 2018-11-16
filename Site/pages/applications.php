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
                    Installing Applications
                </h1>
            </div>
        </div>
    <div id="back"></div>
    <div id="main">
        <div id="mainText">
        <h1>
            
        </h1>
        <p>
             	There are many ways to install new applications on to Linux machines. Depending on which distribution is being used, there are several different methods of installing new applications onto your Linux machine. Whether through a package installation apps, or directly through the command line, installing new software on Linux is easy!
        </p>
        <div id="quickLinks">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#dbm">Debian, Ubuntu, & Mint</a></li>
                <li><a href="#al">Arch</a></li>
                <li><a href="#sect">Running VMware & Other Non-Linux Applications</a></li>
                <li><a href="#emu">Wine Emulator </a></li>
                <li><a href="#vm">VMware</a></li>
            </ul>
        </div>
        <h2 id="dbm">Debian, Ubuntu, & Mint:</h2>
            <p>Debian, and Debian based distributions install new applications through .deb files. Files such as these contain two compressed archives as well as information regarding installation data about those archives. These can be installed either by using graphical applications such as Synaptic or Gdebi, or through the command line via the “apt” command. </p>
        <h2 id="al">Arch Linux:</h2>
            <p>As Arch Linux is generally designed for use by far more advanced Linux users, generally speaking, installing new software onto Arch systems requires installation through the command line tool “pacman”.</p>
            <h2 id="sect">Running VMware & Other Non-Linux Applications:</h2>
            <p>
                Despite many applications not being designed to run on Linux there are several ways to make Windows, OS X, or non-linux applications run properly on Linux systems. Through either using emulators like Wine, or through Virtual Machines, one is able to run non-Linux programs can be run just as efficiently as if they were run on their native operating systems.
            </p>
            <div id="picBox"><img id="pic" src="../assets/images/wineemul.png" alt="Wine Emulator" title="Wine Emulator"></div>
            <h2 id="emu">Wine Emulator:</h2>
            <p>
                The Wine Emulator is an open source project designed to allow Linux users to make any non Linux ported Windows application, program, or software, runnable on Linux machines. First released in 1993, it has allowed many non Linux programs to be used on nearly all Linux distributions. As of 2018, it has been optimised to allow use for of Windows applications from Microsoft Word, to even allowing Windows only video games to run directly on Linux machines.
            </p>
            <div id="picBox"><img id="pic" src="../assets/images/vmware.png" alt="VMware" title="VMware"></div>
            <h2 id="vm">VMware:</h2>
            <p>
                VMware is a proprietary virtual machine software that allows users to use complete virtual machines of non Linux systems on their own system. VMware allows users to operate a full Windows, OS X, Linux, or any other OS system directly without actually installing a new operating system onto the machine.
            </p>
        
        </div>
    </div>
<!--Pull footer content via php-->
<?php 
    include $path.'../assets/inc/footer.php';
?>