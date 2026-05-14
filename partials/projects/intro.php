<?php
$introData = (isset($ProjectsIntroCopy) && is_array($ProjectsIntroCopy)) ? $ProjectsIntroCopy : [];

$introLabel = trim((string) ($introData['label'] ?? 'Our Portfolio'));
$introTitleLine1 = trim((string) ($introData['title_line1'] ?? 'Building'));
$introTitleLine2 = trim((string) ($introData['title_line2'] ?? 'Excellence.'));
$introOutlineLine1 = trim((string) ($introData['outline_line1'] ?? 'One Detail'));
$introOutlineLine2 = trim((string) ($introData['outline_line2'] ?? 'At A Time.'));
$introDesc = trim((string) ($introData['desc'] ?? ''));
$introStats = (!empty($introData['stats']) && is_array($introData['stats'])) ? $introData['stats'] : [];

if (empty($introStats)) {
    $introStats = [
        ['value' => '20+', 'label' => 'Years of Experience'],
        ['value' => '14+', 'label' => 'Specialized Services'],
        ['value' => '20', 'label' => 'Cities Served']
    ];
}
?>

<section class="projects-intro-nova" id="projects-intro">
    <div class="container pinova-shell">
        <div class="pinova-layout">
            <div class="pinova-hero" data-aos="fade-right">
                <span class="pinova-kicker"><?php echo htmlspecialchars($introLabel, ENT_QUOTES, 'UTF-8'); ?></span>
                <h2 class="pinova-title">
                    <span class="pinova-title-solid"><?php echo htmlspecialchars($introTitleLine1, ENT_QUOTES, 'UTF-8'); ?></span>
                    <span class="pinova-title-solid pinova-title-solid--accent"><?php echo htmlspecialchars($introTitleLine2, ENT_QUOTES, 'UTF-8'); ?></span>
                    <span class="pinova-title-outline"><?php echo htmlspecialchars($introOutlineLine1, ENT_QUOTES, 'UTF-8'); ?></span>
                    <span class="pinova-title-outline"><?php echo htmlspecialchars($introOutlineLine2, ENT_QUOTES, 'UTF-8'); ?></span>
                </h2>
            </div>

            <div class="pinova-story" data-aos="fade-left">
                <p><?php echo htmlspecialchars($introDesc, ENT_QUOTES, 'UTF-8'); ?></p>
                <div class="pinova-story__actions">
                    <a href="#portfolio" class="pinova-btn pinova-btn--solid">View Gallery</a>
                    <a href="contact.php" class="pinova-btn pinova-btn--ghost">Request Estimate</a>
                </div>
            </div>
        </div>

        <div class="pinova-stats" data-aos="fade-up" data-aos-delay="120">
            <?php foreach ($introStats as $i => $item): ?>
                <?php
                $value = trim((string) ($item['value'] ?? ''));
                $label = trim((string) ($item['label'] ?? ''));
                ?>
                <article class="pinova-stat">
                    <span class="pinova-stat__index"><?php echo htmlspecialchars(str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT), ENT_QUOTES, 'UTF-8'); ?></span>
                    <div class="pinova-stat__value"><?php echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); ?></div>
                    <div class="pinova-stat__label"><?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?></div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.projects-intro-nova {
    position: relative;
    overflow: hidden;
    padding: clamp(86px, 9vw, 128px) 0 clamp(70px, 7vw, 100px);
    background:
        radial-gradient(circle at 12% 18%, rgba(var(--brand-accent-rgb), 0.22), transparent 36%),
        radial-gradient(circle at 88% 90%, rgba(229, 229, 229, 0.1), transparent 34%),
        linear-gradient(155deg, #000000 0%, #111111 54%, #1f1f1f 100%);
}

.projects-intro-nova::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(201, 151, 60, 0.08) 1px, transparent 1px),
        linear-gradient(90deg, rgba(201, 151, 60, 0.08) 1px, transparent 1px);
    background-size: 46px 46px;
    opacity: 0.42;
    pointer-events: none;
}

.pinova-shell {
    position: relative;
    z-index: 1;
}

.pinova-layout {
    display: grid;
    grid-template-columns: minmax(0, 1.1fr) minmax(0, 0.9fr);
    gap: clamp(28px, 4vw, 68px);
    align-items: end;
}

.pinova-kicker {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 18px;
    color: var(--brand-accent);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 2.3px;
    text-transform: uppercase;
}

.pinova-kicker::before {
    content: '';
    width: 28px;
    height: 2px;
    background: rgba(var(--brand-accent-rgb), 0.72);
}

.pinova-title {
    margin: 0;
    line-height: 1;
}

.pinova-title-solid,
.pinova-title-outline {
    display: block;
    font-size: clamp(2.35rem, 6.2vw, 5.5rem);
    letter-spacing: -0.025em;
    text-transform: uppercase;
}

.pinova-title-solid {
    color: var(--brand-white);
    font-weight: 800;
}

.pinova-title-solid--accent {
    color: var(--brand-accent);
}

.pinova-title-outline {
    color: transparent;
    -webkit-text-stroke: 1px rgba(229, 229, 229, 0.48);
    font-weight: 700;
}

.pinova-story {
    border: 1px solid rgba(var(--brand-accent-rgb), 0.38);
    border-radius: 16px;
    background: linear-gradient(160deg, rgba(0, 0, 0, 0.72), rgba(26, 26, 26, 0.56));
    backdrop-filter: blur(5px);
    padding: clamp(18px, 3vw, 26px);
    box-shadow: 0 22px 46px rgba(0, 0, 0, 0.28);
}

.pinova-story p {
    margin: 0;
    color: rgba(255, 255, 255, 0.9);
    font-size: clamp(1rem, 1.35vw, 1.14rem);
    line-height: 1.75;
}

.pinova-story__actions {
    margin-top: 18px;
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.pinova-btn {
    min-height: 42px;
    padding: 10px 18px;
    border-radius: 999px;
    text-decoration: none;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.45px;
    text-transform: uppercase;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.2s ease, filter 0.2s ease, background 0.2s ease;
}

.pinova-btn:hover {
    transform: translateY(-1px);
}

.pinova-btn--solid {
    background: var(--brand-accent);
    color: var(--brand-secondary);
    border: 1px solid var(--brand-accent);
}

.pinova-btn--solid:hover {
    filter: brightness(1.05);
}

.pinova-btn--ghost {
    border: 1px solid rgba(var(--brand-accent-rgb), 0.48);
    color: var(--brand-white);
    background: rgba(255, 255, 255, 0.06);
}

.pinova-btn--ghost:hover {
    background: rgba(var(--brand-accent-rgb), 0.16);
    color: var(--brand-white);
}

.pinova-stats {
    margin-top: clamp(24px, 3vw, 38px);
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 12px;
}

.pinova-stat {
    border: 1px solid rgba(var(--brand-accent-rgb), 0.28);
    border-radius: 14px;
    background: rgba(0, 0, 0, 0.62);
    padding: 14px 16px;
    box-shadow: 0 16px 34px rgba(0, 0, 0, 0.18);
}

.pinova-stat__index {
    display: inline-flex;
    margin-bottom: 10px;
    color: rgba(var(--brand-accent-rgb), 0.78);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1.6px;
}

.pinova-stat__value {
    color: var(--brand-white);
    font-size: clamp(1.42rem, 2.3vw, 2.05rem);
    line-height: 1;
    font-weight: 800;
}

.pinova-stat__label {
    margin-top: 8px;
    color: rgba(229, 229, 229, 0.86);
    font-size: 0.84rem;
    line-height: 1.4;
}

@media (max-width: 980px) {
    .pinova-layout {
        grid-template-columns: 1fr;
        align-items: start;
        gap: 20px;
    }
}

@media (max-width: 760px) {
    .pinova-title-outline {
        display: inline;
        margin-right: 10px;
    }

    .pinova-stats {
        grid-template-columns: 1fr;
    }

    .pinova-story__actions {
        flex-direction: column;
    }

    .pinova-btn {
        width: 100%;
    }
}
</style>
