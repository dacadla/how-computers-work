<!DOCTYPE html>
<html lang="en">
<head>
    <title>Computer Hardware</title>
    <link rel="stylesheet" href="../css/styles.css">
    <?php include "../components/head.php" ?>
</head>
<body>
<header>
    <h1>System Software</h1>
</header>

<main>
    <p>Aside from the hardware in your computer, an equally essential part of your computer is the software. Software
        can be mainly grouped into two parts, system software and application software. System software can also be
        split up into two more groups, Operating system software and utility software. Operating system software is the
        actual operating system needed for your computer to work, for example explorer and the windows sign on program.
        This also contains drivers. Utility software is the programs you download to make the user experience better.
        It is the software that keeps your computer safe, keeps it running efficiently, and provides useful tools to
        manage files and applications. For example antivirus software or different software that can control your
        hardware through drivers. If you bought a computer from an OEM vendor (Lenovo, ASUS, Acer, etc.) then some
        utility software might already be preinstalled on your computer.</p>
    <p>Application software is the software you use to do things, for example Microsoft Word or Google Chrome. It is the
        software we usually think about when we think "computer software".</p>
    <p>Here is an overview of different system software you have on your computer:</p>
    <br>
    <h1>System Software</h1>
    <br>
    <h2>Operating System Software</h2>
    <br>
    <section>
        <h2>Boot Loader</h2>
        <p>This is the thing that loads your kernel on boot. Pretty self explanatory. Examples include Windows Boot
            Manager and GRUB.</p>
    </section>
    <section>
        <h2>Kernel</h2>
        <p>This is the orchestrator I mentioned on the hardware overview. It is the thing that sits between the hardware
            and the software and can be accessed by interrupts or a standard library</p>
    </section>
    <section>
        <h2>Drivers</h2>
        <p>This sits alongside the kernel, giving it information on how to "drive" the hardware components, hence the
            name.</p>
    </section>
    <section>
        <h2>Standard Library</h2>
        <p>This is how your applications communicate with the kernel and therefore the software. It is usually made by
            the same people who made the kernel, although there are some exceptions (Linux).</p>
        <p class="hidden">I'd just like to interject for a moment. What you’re referring to as Linux, is in fact,
            GNU/Linux, or as I’ve recently taken to calling it, GNU plus Linux. Linux is not an operating system unto
            itself, but rather another free component of a fully functioning GNU system made useful by the GNU corelibs,
            shell utilities and vital system components comprising a full OS as defined by POSIX.
            Many computer users run a modified version of the GNU system every day, without realizing it. Through a
            peculiar turn of events, the version of GNU which is widely used today is often called “Linux”, and many of
            its users are not aware that it is basically the GNU system, developed by the GNU Project. There really is a
            Linux, and these people are using it, but it is just a part of the system they use.
            Linux is the kernel: the program in the system that allocates the machine’s resources to the other programs
            that you run. The kernel is an essential part of an operating system, but useless by itself; it can only
            function in the context of a complete operating system. Linux is normally used in combination with the GNU
            operating system: the whole system is basically GNU with Linux added, or GNU/Linux. All the so-called
            “Linux” distributions are really distributions of GNU/Linux.</p>
    </section>
    <section>
        <h2>Display & Seat Manager</h2>
        <p>What seats are is a complicated topic, but think of it as that computers are an auditorium. Different users
            can take different seats on the computer to log on, therefore you can set a maximum number of logged-in
            users by setting the number of seats available. A seat manager manages sign in and sign out, and it usually
            has a frontend for sign in. This is your sign in screen when you start your computer.</p>
    </section>
    <section>
        <h2>Window Manager</h2>
        <p>This is what... Well manages your windows (no pun intended). It is the thing that shows title bars, lets you
            move them, and it is the thing that displays them on your screen. Please know that it only shows the
            windows, and any other part of the UI is a different program.</p>
    </section>
    <section>
        <h2>Desktop Environment</h2>
        <p>This is all the programs needed for a GUI all rolled into one. It includes your window manager, and any other
            software needed for the UI. For example your taskbar, notification system, start menu, and sometimes some
            applications that work well with the desktop environment. Notable examples include Explorer (Windows),
            Aqua (MacOS), GNOME, KDE, MATE, Budgie, and Xfce (UNIX based systems).</p>
    </section>
    <br>
    <h2>Utility Software</h2>
    <br>
    <section>
        <h2>Anti-Virus</h2>
        <p>This is the software that protects your computer from viruses. It scans your computer for viruses and removes
            them. It also has a real-time scanner that scans files as you download them, and scans files as you open
            them.</p>
    </section>
    <section>
        <h2>Firewall</h2>
        <p>This is the software that protects your computer from hackers. It scans your network for hackers and blocks
            them. It also scans your computer for programs that are trying to connect to the internet, and asks you if
            you want to allow them to connect.</p>
    </section>
    <section>
        <h2>Compression Software</h2>
        <p>This is the software that compresses files. It scans files for patterns and replaces them with smaller
            patterns, therefore making the file smaller. It also has a decompression feature that can decompress
            compressed files.</p>
    </section>
    <section>
        <h2>File Manager</h2>
        <p>This is the software that manages your files. It lets you view files, move them, copy them, and delete them.
            It also has a search feature that lets you search for files.</p>
    </section>
    <section>
        <h2>Task Manager</h2>
        <p>This is the software that manages your processes. It lets you view processes, kill them, and view their
            resource usage.</p>
    </section>
    <section>
        <h2>Text Editor</h2>
        <p>This is the software that edits text. It lets you create text files, edit them, and save them. It also has a
            feature that lets you open text files.</p>
    </section>
    <section>
        <h2>Terminal Emulator</h2>
        <p>This is the software that emulates a terminal. It lets you execute commands, view their output, and view
            their input.</p>
    </section>
    <section>
        <h2>Archive Manager</h2>
        <p>This is the software that manages your archives. It lets you view archives, extract them, and create them.
            It also has a feature that lets you open archives.</p>
    </section>
    <a href="application-software.php" class="button">Application Software</a>
    <br>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Radovan Mihalik</p>
    <a href="../index.php">Return To Home Page</a>
</footer>
</body>
</html>
