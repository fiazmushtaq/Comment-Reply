<style>
*{
margin: 0px;
padding: 0px;
}
nav a:hover {
    transform: scale(1.05);
}
.logo-white {
    filter: brightness(0) invert(1);
     max-height: 60px;
    object-fit: contain;
}

</style>
<header style="box-shadow: 0 4px 8px rgba(0, 0, 0, 1); background-color: #025a1eff; padding: 0px; border-bottom: 1px solid #ddd;">

         <nav style=" margin-left: 80px;  display: flex; justify-content: space-between; align-items: center;">
        <!-- Logo on the left -->
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo-white" >

    <div>
    <nav style="display: flex; justify-content: flex-end;">
        <a href="/" style="margin-left: 15px; margin-right: 0px; text-decoration: none; color: white; font-weight: bold;">Home</a>
        <a href="/service" style="margin-left: 15px; margin-right: 0px; text-decoration: none; color: white; font-weight: bold;">Service</a>
        <a href="/about" style="margin-left: 15px; margin-right: 0px; text-decoration: none; color: white; font-weight: bold;">About</a>
        <a href="/contact" style="margin-left: 15px; margin-right: 80px; text-decoration: none; color: white; font-weight: bold;">Contact</a>
        
    </nav>
    </div>
</header>

