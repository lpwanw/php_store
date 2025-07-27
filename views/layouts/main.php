<!DOCTYPE html>
<html lang="en" class="dark">
<?php include __DIR__ . '/head.php'; ?>
<body class="bg-background text-foreground min-h-screen flex flex-col">
<header class="border-b bg-card">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <h1 class="text-xl font-bold text-foreground">My Website</h1>
            <nav class="space-x-6">
                <a href="/" class="text-muted-foreground hover:text-foreground transition-colors">Home</a>
                <a href="/about" class="text-muted-foreground hover:text-foreground transition-colors">About</a>
                <button
                        type="button"
                        aria-label="Toggle dark mode"
                        data-tooltip="Toggle dark mode"
                        data-side="bottom"
                        onclick="document.dispatchEvent(new CustomEvent('basecoat:theme'))"
                        class="btn-icon-outline size-8"
                >
                    <span class="hidden dark:block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4" /><path d="M12 2v2" /><path d="M12 20v2" /><path d="m4.93 4.93 1.41 1.41" /><path d="m17.66 17.66 1.41 1.41" /><path d="M2 12h2" /><path d="M20 12h2" /><path d="m6.34 17.66-1.41 1.41" /><path d="m19.07 4.93-1.41 1.41" /></svg></span>
                    <span class="block dark:hidden"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" /></svg></span>
                </button>
            </nav>
        </div>
    </div>
</header>

<main class="flex-1 container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <?php echo $content; ?>
</main>

<footer class="border-t bg-card mt-auto">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <p class="text-center text-muted-foreground">&copy; <?php echo date('Y'); ?> My Awesome Site</p>
    </div>
</footer>
</body>
</html>
