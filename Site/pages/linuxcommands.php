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
                    Linux Commands
                </h1>
            </div>
        </div>
    <div id="back"></div>
    <div id="main">
        <div id="mainText">
        <h1>
            
        </h1>
        <p>
             While there are many flavors and distributions of Linux that do not require use of the command line in order for everyday use, however the command lines still remains an essential tool for every Linux user. While some commands are complex and require time and effort to learn all of their functions and uses, there are some commands that are very simple to use and learn, yet are just as useful. Here are some of the most commonly used bash commands for everyday use that every Linux user should know, along with example pictures taken directly from a Linux command line:
        </p>
        <div id="quickLinks">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#cat">cat</a></li>
                <li><a href="#cd">cd</a></li>
                <li><a href="#ls">ls</a></li>
                <li><a href="#mkdir">mkdir</a></li>
                <li><a href="#mv">mv</a></li>
                <li><a href="#rm">rm</a></li>
            </ul>
        </div>
            <h2 id="cat">CAT:</h2>
            <p>
                “cat” is a very simple command used in order to read a file of any kind directly in the command line. It makes things simple for reading small files without having to open them in another application or program.
            </p>
            <div id="picBox"><img id="pic" src="../assets/images/catexample.png" alt="Example of cat command" title="Example of cat command"></div>
            
            <h2 id="cd">CD:</h2>
            <p>
                 “cd” is a command used to change what file directory the user is in. This allows a user to navigate through the filesystem of their machine in the command line, the same way one would navigate through a file explorer application.
            </p>
            <div id="picBox"><img id="pic" src="../assets/images/cdexample.png" alt="Example of cd command" title="Example of cd command"></div>
            <h2 id="ls">LS:</h2>
            <p>
                  “ls” is the command used to see the contents of the current file directory, or see the contents of another directory. This lets the user see what exactly is in a folder, and depending on the command options, will allow the user to see some of the properties of all the files in a directory..
            </p>
            <div id="picBox"><img id="pic" src="../assets/images/lsexample.png" alt="Example of ls command" title="Example of ls command"></div>
            <h2 id="mkdir">MKDIR:</h2>
            <p>
                 “mkdir” is the command that allows a user to create a new file/folder directory. This makes it easier to create new spaces or sub directories to the one the user is currently in, or even allows the user to create directories in folders that the user is not currently in.
            </p>
            <div id="picBox"><img id="pic" src="../assets/images/mkdirexample.png" alt="Example of mkdir command" title="Example of mkdir command"></div>
            <h2 id="mv">MV:</h2>
            <p>
                 “mv” is used when the user needs to move a file, or even a directory, into another directory. While mv does have multiple options that a user can learn in order to do more advanced moving tasks, such as moving several objects to one directory, and moving several others to another, it is very easy to learn these fellow commands.
            </p>
            <div id="picBox"><img id="pic" src="../assets/images/mvexample.png" alt="Example of mv command" title="Example of mv command"></div>
            <h2 id="rm">RM:</h2>
            <p>
                 “rm” is the removal tool used universally in almost all Linux systems. It allows the user to remove individual files, as well as entire directories from a system. Rm is a very powerful tool used in maintaining file systems, as well as for just cleaning out one’s rubbish in a directory. When used with the default “rm” command, Rm will delete only files, when used as “rm -rf”, Rm will delete entire directories, as well as all the contents of that directory, including any subdirectories therein.
            </p>
            <div id="picBox"><img id="pic" src="../assets/images/rmexample.png" alt="Example of rm command" title="Example of rm command"></div>
            <h2 id="rm">More Resources:</h2>
            <p>
                 For a more complete list of Linux bash commands, see this reference: <a href="https://learncodethehardway.org/unix/bash_cheat_sheet.pdf">Bash Cheat Sheet</a>
            </p>
        
            
        </div>
    </div>
<!--Pull footer content via php-->
<?php 
    include $path.'../assets/inc/footer.php';
?>