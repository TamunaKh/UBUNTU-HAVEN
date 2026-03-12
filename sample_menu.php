<?php
session_start();
$page_title = 'Sample Menu | Ubuntu Haven';
include 'includes/header.php'; 
?>
</header> <style>
    header, .hero, .hero-header {
        background-image: none !important;
        min-height: 90px !important; 
        height: auto !important;
        background-color: #111 !important;
    }
</style>

<main class="section" style="background-color: #1a1a1a; color: white; padding: 140px 0 80px 0;">
    <div class="container" style="max-width: 900px; margin: 0 auto; text-align: center;">
        
        <h1 class="text-heading-large" style="color: var(--primary-01); margin-bottom: 24px;">Our Dining Experience</h1>
        <p style="font-size: 18px; color: #ccc; line-height: 1.8; margin-bottom: 60px; max-width: 700px; margin-left: auto; margin-right: auto;">
            Experience the authentic flavors of the Western Cape. Our seasonal menus feature Cape Malay curries, fresh line fish, and traditional 'Braai' (barbecue) nights under the stars.
        </p>

        <div style="background: #262626; padding: 50px; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.5); text-align: left; border-top: 5px solid var(--primary-01);">
            
            <h2 class="text-heading-medium" style="color: white; border-bottom: 1px solid #444; padding-bottom: 12px; margin-bottom: 24px; text-transform: uppercase; letter-spacing: 2px; font-size: 20px;">Starters</h2>
            
            <div style="margin-bottom: 24px;">
                <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 8px;">
                    <h3 style="color: var(--primary-01); font-size: 18px; margin: 0; font-family: var(--font-family-heading);">West Coast Oysters</h3>
                    <span style="color: #999; font-size: 16px;">R 180</span>
                </div>
                <p style="color: #aaa; font-size: 14px; margin: 0; font-style: italic;">Freshly shucked, served with lemon wedges and a classic mignonette.</p>
            </div>

            <div style="margin-bottom: 40px;">
                <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 8px;">
                    <h3 style="color: var(--primary-01); font-size: 18px; margin: 0; font-family: var(--font-family-heading);">Cape Malay Samosas</h3>
                    <span style="color: #999; font-size: 16px;">R 120</span>
                </div>
                <p style="color: #aaa; font-size: 14px; margin: 0; font-style: italic;">Crispy pastry parcels filled with mildly spiced beef or vegetables, served with homemade peach chutney.</p>
            </div>

            <h2 class="text-heading-medium" style="color: white; border-bottom: 1px solid #444; padding-bottom: 12px; margin-bottom: 24px; text-transform: uppercase; letter-spacing: 2px; font-size: 20px;">Main Courses</h2>
            
            <div style="margin-bottom: 24px;">
                <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 8px;">
                    <h3 style="color: var(--primary-01); font-size: 18px; margin: 0; font-family: var(--font-family-heading);">Traditional Chicken Curry</h3>
                    <span style="color: #999; font-size: 16px;">R 280</span>
                </div>
                <p style="color: #aaa; font-size: 14px; margin: 0; font-style: italic;">A fragrant Cape Malay staple. Served with fragrant yellow rice, buttery flaky roti, and fresh tomato sambal.</p>
            </div>

            <div style="margin-bottom: 24px;">
                <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 8px;">
                    <h3 style="color: var(--primary-01); font-size: 18px; margin: 0; font-family: var(--font-family-heading);">Catch of the Day</h3>
                    <span style="color: #999; font-size: 16px;">R 320</span>
                </div>
                <p style="color: #aaa; font-size: 14px; margin: 0; font-style: italic;">Locally sourced fresh line fish, pan-seared with a lemon-herb butter, accompanied by seasonal roasted vegetables.</p>
            </div>

            <div style="margin-bottom: 40px;">
                <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 8px;">
                    <h3 style="color: var(--primary-01); font-size: 18px; margin: 0; font-family: var(--font-family-heading);">The Ubuntu Braai Platter</h3>
                    <span style="color: #999; font-size: 16px;">R 450</span>
                </div>
                <p style="color: #aaa; font-size: 14px; margin: 0; font-style: italic;">Karoo lamb chops, traditional boerewors, and fire-grilled chicken, served with chakalaka and grilled mielies (corn).</p>
            </div>

            <h2 class="text-heading-medium" style="color: white; border-bottom: 1px solid #444; padding-bottom: 12px; margin-bottom: 24px; text-transform: uppercase; letter-spacing: 2px; font-size: 20px;">Desserts</h2>
            
            <div style="margin-bottom: 24px;">
                <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 8px;">
                    <h3 style="color: var(--primary-01); font-size: 18px; margin: 0; font-family: var(--font-family-heading);">Warm Malva Pudding</h3>
                    <span style="color: #999; font-size: 16px;">R 110</span>
                </div>
                <p style="color: #aaa; font-size: 14px; margin: 0; font-style: italic;">A sweet, sticky South African classic baked with apricot jam, drenched in a creamy vanilla custard.</p>
            </div>

            <div style="margin-bottom: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 8px;">
                    <h3 style="color: var(--primary-01); font-size: 18px; margin: 0; font-family: var(--font-family-heading);">Traditional Milk Tart</h3>
                    <span style="color: #999; font-size: 16px;">R 95</span>
                </div>
                <p style="color: #aaa; font-size: 14px; margin: 0; font-style: italic;">A delicate, creamy custard tart in a crisp pastry shell, dusted with sweet cinnamon.</p>
            </div>

        </div>
        
        <div style="margin-top: 40px;">
            <a href="user_portal.php#book-services" class="button-outline" style="background-color: var(--primary-01); color: white; padding: 14px 32px; border-radius: 4px; font-weight: bold; text-decoration: none; border: none;">Reserve a Table</a>
        </div>

    </div>
</main>

<?php include 'includes/footer.php'; ?>