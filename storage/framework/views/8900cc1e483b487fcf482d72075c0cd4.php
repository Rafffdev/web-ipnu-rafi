<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>IPNU IPPNU — Ikatan Pelajar Nahdlatul Ulama</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,800;0,900;1,700&family=DM+Sans:wght@300;400;500;600&family=Amiri:ital,wght@0,700;1,400&display=swap" rel="stylesheet">

  <style>
    :root {
      --forest: #0d2418;
      --forest2: #162d20;
      --forest3: #1e3d2a;
      --emerald: #2d7a4f;
      --emerald-light: #3da369;
      --gold: #c9943e;
      --gold-light: #e4b563;
      --cream: #f5f0e8;
      --cream-muted: #b8af9e;
      --white: #fafaf8;
      --glass: rgba(255,255,255,0.04);
      --glass-border: rgba(255,255,255,0.09);
      --shadow-green: rgba(45,122,79,0.3);
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }

    body {
      font-family: 'DM Sans', sans-serif;
      background-color: var(--forest);
      color: var(--cream);
      overflow-x: hidden;
    }

    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background-image:
        url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.015'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      pointer-events: none;
      z-index: 0;
    }

    /* ===== NAVBAR ===== */
    .navbar {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 999;
      background: rgba(13,36,24,0.88);
      backdrop-filter: blur(24px);
      -webkit-backdrop-filter: blur(24px);
      border-bottom: 1px solid rgba(201,148,62,0.18);
      padding: 0.6rem 0;
      transition: all 0.4s ease;
      overflow: visible;
    }

    .navbar.scrolled {
      padding: 0.4rem 0;
      background: rgba(13,36,24,0.98);
    }

    .nav-inner {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      overflow: visible;
    }

    /* ===== LOGO / BRAND ===== */
    .nav-brand {
      display: flex;
      align-items: center;
      gap: 12px;
      text-decoration: none;
    }

    .brand-logo {
      width: 52px;
      height: 52px;
      background: #0d2418;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      transition: transform 0.3s;
      overflow: hidden;
      padding: 3px;
    }

    .nav-brand:hover .brand-logo {
      transform: scale(1.07);
    }

    .brand-logo img {
      width: 100%;
      height: 100%;
      object-fit: contain;
      display: block;
    }

    .brand-text-wrap { line-height: 1; }

    .brand-title {
      font-family: 'Playfair Display', serif;
      font-size: 1rem;
      font-weight: 800;
      color: var(--white);
      letter-spacing: 0.02em;
    }

    .brand-sub {
      font-size: 0.62rem;
      color: var(--gold);
      letter-spacing: 0.18em;
      text-transform: uppercase;
      margin-top: 3px;
      display: block;
    }

    /* ===== NAV LINKS ===== */
    .nav-links {
      display: flex;
      align-items: center;
      gap: 0.1rem;
      list-style: none;
    }

    .nav-links a {
      color: var(--cream-muted);
      text-decoration: none;
      font-size: 0.83rem;
      font-weight: 500;
      letter-spacing: 0.04em;
      padding: 0.5rem 0.85rem;
      border-radius: 6px;
      transition: all 0.25s;
      position: relative;
    }

    .nav-links a:hover, .nav-links a.active {
      color: var(--cream);
      background: rgba(255,255,255,0.05);
    }

    .nav-links a.active::after {
      content: '';
      display: block;
      width: 18px; height: 2px;
      background: var(--gold);
      border-radius: 2px;
      margin: 3px auto 0;
    }

    .btn-nav-cta {
      background: linear-gradient(135deg, var(--gold), #b07a28) !important;
      color: var(--forest) !important;
      border-radius: 8px !important;
      font-weight: 600 !important;
      padding: 0.5rem 1.15rem !important;
      box-shadow: 0 4px 14px rgba(201,148,62,0.35);
      transition: all 0.3s !important;
    }

    .btn-nav-cta:hover {
      transform: translateY(-1px);
      box-shadow: 0 8px 22px rgba(201,148,62,0.45) !important;
      background: linear-gradient(135deg, var(--gold-light), var(--gold)) !important;
      color: var(--forest) !important;
    }

    .nav-burger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
      padding: 4px;
    }

    .nav-burger span {
      display: block;
      width: 22px; height: 2px;
      background: var(--cream);
      border-radius: 2px;
      transition: all 0.3s;
    }

    @media (max-width: 768px) {
      .nav-burger { display: flex; }
      .nav-links {
        display: none;
        position: absolute;
        top: 100%; left: 0; right: 0;
        background: rgba(13,36,24,0.98);
        flex-direction: column;
        padding: 1rem;
        border-bottom: 1px solid rgba(201,148,62,0.15);
        gap: 0.25rem;
      }
      .nav-links.open { display: flex; }
      .nav-links a { width: 100%; text-align: center; }
    }

    /* ===== SCROLL OFFSET untuk navbar fixed ===== */
    section[id], header[id] {
      scroll-margin-top: 70px;
    }

    /* ===== HERO ===== */
    #home {
      position: relative;
      min-height: 100vh;
      display: flex;
      align-items: center;
      overflow: hidden;
    }

    .hero-bg-orbs {
      position: absolute;
      inset: 0;
      pointer-events: none;
      z-index: 0;
    }

    .orb {
      position: absolute;
      border-radius: 50%;
      filter: blur(70px);
      animation: orb-drift 12s ease-in-out infinite;
    }

    .orb-1 {
      width: 500px; height: 500px;
      background: rgba(45,122,79,0.12);
      top: -100px; right: -100px;
      animation-duration: 14s;
    }

    .orb-2 {
      width: 350px; height: 350px;
      background: rgba(201,148,62,0.08);
      bottom: -50px; left: -80px;
      animation-duration: 10s;
      animation-delay: 3s;
    }

    .orb-3 {
      width: 250px; height: 250px;
      background: rgba(61,163,105,0.07);
      top: 40%; left: 30%;
      animation-duration: 16s;
      animation-delay: 1s;
    }

    @keyframes orb-drift {
      0%, 100% { transform: translate(0, 0) scale(1); }
      33% { transform: translate(25px, -30px) scale(1.05); }
      66% { transform: translate(-20px, 20px) scale(0.97); }
    }

    .geo-pattern {
      position: absolute;
      right: 0; top: 0; bottom: 0;
      width: 50%;
      opacity: 0.04;
      background-image:
        repeating-linear-gradient(45deg, var(--gold) 0, var(--gold) 1px, transparent 0, transparent 50%),
        repeating-linear-gradient(-45deg, var(--gold) 0, var(--gold) 1px, transparent 0, transparent 50%);
      background-size: 30px 30px;
      pointer-events: none;
      z-index: 0;
    }

    .hero-container {
      position: relative;
      z-index: 2;
      max-width: 1200px;
      margin: 0 auto;
      padding: 8rem 2rem 4rem;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
      align-items: center;
    }

    @media (max-width: 900px) {
      .hero-container { grid-template-columns: 1fr; gap: 2rem; }
      .hero-visual { display: none; }
    }

    .hero-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 1.5rem;
      animation: fadeUp 0.8s ease both;
    }

    .eyebrow-line { width: 32px; height: 1px; background: var(--gold); }

    .eyebrow-text {
      font-size: 0.72rem;
      color: var(--gold);
      letter-spacing: 0.2em;
      text-transform: uppercase;
      font-weight: 600;
    }

    .hero-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2.4rem, 5vw, 4rem);
      font-weight: 900;
      line-height: 1.1;
      letter-spacing: -0.01em;
      margin-bottom: 0.5rem;
      animation: fadeUp 0.9s ease 0.1s both;
    }

    .hero-title .italic { font-style: italic; color: var(--emerald-light); }
    .hero-title .gold { color: var(--gold-light); }

    .hero-arabic {
      font-family: 'Amiri', serif;
      font-size: 1.4rem;
      color: rgba(201,148,62,0.6);
      margin-bottom: 1.5rem;
      direction: rtl;
      animation: fadeUp 0.9s ease 0.2s both;
    }

    .hero-desc {
      font-size: 1rem;
      color: var(--cream-muted);
      line-height: 1.8;
      max-width: 480px;
      margin-bottom: 2.5rem;
      animation: fadeUp 0.9s ease 0.3s both;
    }

    .hero-actions {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
      animation: fadeUp 0.9s ease 0.4s both;
    }

    .btn-primary {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: linear-gradient(135deg, var(--gold), #b07a28);
      color: var(--forest);
      text-decoration: none;
      padding: 0.85rem 1.8rem;
      border-radius: 8px;
      font-weight: 600;
      font-size: 0.9rem;
      transition: all 0.3s;
      box-shadow: 0 6px 22px rgba(201,148,62,0.35);
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 32px rgba(201,148,62,0.5);
    }

    .btn-outline {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: transparent;
      border: 1px solid rgba(201,148,62,0.4);
      color: var(--cream);
      text-decoration: none;
      padding: 0.85rem 1.8rem;
      border-radius: 8px;
      font-weight: 500;
      font-size: 0.9rem;
      transition: all 0.3s;
    }

    .btn-outline:hover {
      border-color: var(--gold);
      background: rgba(201,148,62,0.08);
      color: var(--gold-light);
    }

    .hero-visual {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      animation: fadeUp 1s ease 0.5s both;
    }

    .emblem-large { width: 280px; height: 280px; position: relative; }

    .emblem-ring {
      position: absolute;
      inset: 0;
      border-radius: 50%;
      border: 1px solid rgba(201,148,62,0.2);
      animation: ring-spin 20s linear infinite;
    }

    .emblem-ring::before {
      content: '';
      position: absolute;
      top: -4px; left: 50%;
      transform: translateX(-50%);
      width: 8px; height: 8px;
      background: var(--gold);
      border-radius: 50%;
    }

    .emblem-ring-2 {
      inset: 20px;
      animation-direction: reverse;
      animation-duration: 15s;
      border-color: rgba(61,163,105,0.2);
    }

    .emblem-ring-2::before { background: var(--emerald-light); }

    @keyframes ring-spin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    .emblem-center {
      position: absolute;
      inset: 40px;
      background: linear-gradient(145deg, var(--forest2), var(--forest3));
      border-radius: 50%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      border: 1px solid rgba(201,148,62,0.25);
      box-shadow: 0 20px 60px rgba(0,0,0,0.4), inset 0 1px 0 rgba(255,255,255,0.05);
    }

    .emblem-icon { font-size: 3.5rem; margin-bottom: 0.3rem; }

    .emblem-label {
      font-family: 'Amiri', serif;
      font-size: 0.85rem;
      color: var(--gold);
      letter-spacing: 0.05em;
    }

    .float-badge {
      position: absolute;
      background: var(--forest2);
      border: 1px solid rgba(201,148,62,0.25);
      border-radius: 10px;
      padding: 0.6rem 1rem;
      font-size: 0.75rem;
      font-weight: 600;
      white-space: nowrap;
      box-shadow: 0 8px 24px rgba(0,0,0,0.3);
    }

    .float-badge-1 {
      top: 10px; right: -30px;
      color: var(--emerald-light);
      animation: badge-float 4s ease-in-out infinite;
    }

    .float-badge-2 {
      bottom: 30px; left: -30px;
      color: var(--gold-light);
      animation: badge-float 5s ease-in-out infinite 1s;
    }

    @keyframes badge-float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    .float-badge-3 {
      top: 50%; right: -50px;
      color: var(--cream-muted);
      animation: badge-float-mid 6s ease-in-out infinite 2s;
    }

    @keyframes badge-float-mid {
      0%, 100% { transform: translateY(-50%); }
      50% { transform: translateY(calc(-50% - 10px)); }
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(24px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* ===== STATS STRIP ===== */
    .stats-strip {
      background: var(--forest2);
      border-top: 1px solid rgba(201,148,62,0.15);
      border-bottom: 1px solid rgba(201,148,62,0.15);
      padding: 2.5rem 0;
      position: relative;
      z-index: 5;
    }

    .stats-inner {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 2rem;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1rem;
    }

    @media (max-width: 600px) { .stats-inner { grid-template-columns: repeat(2, 1fr); } }

    .stat-item { text-align: center; padding: 0.5rem; position: relative; }

    .stat-item:not(:last-child)::after {
      content: '';
      position: absolute;
      right: 0; top: 20%; bottom: 20%;
      width: 1px;
      background: rgba(255,255,255,0.08);
    }

    .stat-num {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      font-weight: 800;
      color: var(--gold-light);
      display: block;
    }

    .stat-label {
      font-size: 0.75rem;
      color: var(--cream-muted);
      letter-spacing: 0.08em;
      text-transform: uppercase;
      margin-top: 4px;
    }

    /* ===== SECTION SHARED ===== */
    .section-wrap { max-width: 1200px; margin: 0 auto; padding: 0 2rem; }

    .section-header { text-align: center; margin-bottom: 3.5rem; }

    .section-eyebrow { display: inline-flex; align-items: center; gap: 10px; margin-bottom: 1rem; }
    .section-eyebrow .line { width: 24px; height: 1px; background: var(--gold); }
    .section-eyebrow span { font-size: 0.7rem; color: var(--gold); letter-spacing: 0.2em; text-transform: uppercase; font-weight: 600; }

    .section-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1.8rem, 3.5vw, 2.6rem);
      font-weight: 800;
      line-height: 1.15;
      color: var(--white);
      margin-bottom: 0.75rem;
    }

    .section-title em { font-style: italic; color: var(--emerald-light); }

    .section-desc {
      font-size: 0.95rem;
      color: var(--cream-muted);
      max-width: 480px;
      margin: 0 auto;
      line-height: 1.75;
    }

    .reveal {
      opacity: 0;
      transform: translateY(28px);
      transition: opacity 0.7s ease, transform 0.7s ease;
    }

    .reveal.visible { opacity: 1; transform: translateY(0); }
    .rd1 { transition-delay: 0.1s; }
    .rd2 { transition-delay: 0.2s; }
    .rd3 { transition-delay: 0.3s; }
    .rd4 { transition-delay: 0.4s; }

    /* ===== ANGGOTA SECTION ===== */
    #anggota { padding: 6rem 0; background: var(--forest); position: relative; }

    #anggota::before {
      content: '';
      position: absolute;
      top: 0; left: 50%;
      transform: translateX(-50%);
      width: 700px; height: 300px;
      background: radial-gradient(ellipse, rgba(45,122,79,0.08) 0%, transparent 70%);
      pointer-events: none;
    }

    .filter-bar {
      background: var(--forest2);
      border: 1px solid rgba(255,255,255,0.07);
      border-radius: 12px;
      padding: 1.1rem 1.4rem;
      margin-bottom: 1.5rem;
      display: flex;
      gap: 1rem;
      align-items: center;
      flex-wrap: wrap;
    }

    .search-wrap { position: relative; flex: 1; min-width: 200px; }

    .search-wrap svg {
      position: absolute;
      left: 14px; top: 50%;
      transform: translateY(-50%);
      width: 14px; height: 14px;
      stroke: var(--cream-muted);
      fill: none;
    }

    .search-input {
      width: 100%;
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 8px;
      color: var(--cream);
      padding: 0.65rem 1rem 0.65rem 2.6rem;
      font-size: 0.88rem;
      font-family: 'DM Sans', sans-serif;
      outline: none;
      transition: border-color 0.3s;
    }

    .search-input::placeholder { color: var(--cream-muted); }
    .search-input:focus { border-color: rgba(201,148,62,0.5); }

    .table-wrap {
      background: var(--forest2);
      border: 1px solid rgba(255,255,255,0.07);
      border-radius: 14px;
      overflow: hidden;
    }

    .table-wrap table { width: 100%; border-collapse: collapse; }

    .table-wrap thead tr {
      background: rgba(201,148,62,0.07);
      border-bottom: 1px solid rgba(255,255,255,0.06);
    }

    .table-wrap thead th {
      padding: 1rem 1.2rem;
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--cream-muted);
    }

    .table-wrap tbody tr {
      border-bottom: 1px solid rgba(255,255,255,0.03);
      transition: background 0.2s;
    }

    .table-wrap tbody tr:last-child { border-bottom: none; }
    .table-wrap tbody tr:hover { background: rgba(45,122,79,0.06); }

    .table-wrap tbody td {
      padding: 0.95rem 1.2rem;
      font-size: 0.88rem;
      vertical-align: middle;
    }

    .avatar-cell { display: flex; align-items: center; gap: 10px; }

    .avatar-circle {
      width: 32px; height: 32px;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.7rem;
      font-weight: 700;
      color: #fff;
      flex-shrink: 0;
    }

    .badge-ipnu {
      display: inline-flex;
      align-items: center;
      gap: 4px;
      font-size: 0.72rem;
      font-weight: 600;
      padding: 0.28rem 0.7rem;
      border-radius: 6px;
      background: rgba(45,122,79,0.15);
      color: #6ee7b7;
      border: 1px solid rgba(45,122,79,0.3);
    }

    .badge-ippnu {
      background: rgba(201,148,62,0.12);
      color: var(--gold-light);
      border: 1px solid rgba(201,148,62,0.25);
    }

    .badge-pengurus {
      background: rgba(99,102,241,0.12);
      color: #a5b4fc;
      border: 1px solid rgba(99,102,241,0.25);
    }

    .pagination-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 1.25rem;
      flex-wrap: wrap;
      gap: 0.75rem;
    }

    .page-info { font-size: 0.82rem; color: var(--cream-muted); }
    .page-btns { display: flex; gap: 6px; }

    .page-btn {
      background: var(--forest2);
      border: 1px solid rgba(255,255,255,0.08);
      color: var(--cream-muted);
      border-radius: 8px;
      padding: 0.5rem 1rem;
      font-size: 0.82rem;
      font-family: 'DM Sans', sans-serif;
      cursor: pointer;
      transition: all 0.2s;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .page-btn:hover {
      background: rgba(201,148,62,0.1);
      border-color: rgba(201,148,62,0.4);
      color: var(--gold-light);
    }

    /* ===== PROGRAM SECTION ===== */
    .program-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
    }

    @media (max-width: 900px) { .program-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 600px) { .program-grid { grid-template-columns: 1fr; } }

    .program-card {
      background: var(--forest2);
      border: 1px solid rgba(255,255,255,0.07);
      border-radius: 16px;
      padding: 2rem;
      position: relative;
      overflow: hidden;
      transition: all 0.35s ease;
      cursor: default;
    }

    .program-card::before {
      content: '';
      position: absolute;
      bottom: 0; left: 0; right: 0;
      height: 3px;
      background: linear-gradient(90deg, var(--gold), var(--emerald-light));
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.4s ease;
    }

    .program-card:hover {
      border-color: rgba(201,148,62,0.25);
      transform: translateY(-5px);
      box-shadow: 0 18px 48px rgba(0,0,0,0.3);
    }

    .program-card:hover::before { transform: scaleX(1); }

    .program-icon {
      width: 48px; height: 48px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.4rem;
      margin-bottom: 1.25rem;
    }

    .program-title { font-weight: 700; font-size: 1.05rem; color: var(--white); margin-bottom: 0.5rem; }
    .program-desc { font-size: 0.87rem; color: var(--cream-muted); line-height: 1.7; }

    .program-tag {
      display: inline-block;
      margin-top: 1rem;
      font-size: 0.68rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      padding: 0.28rem 0.7rem;
      border-radius: 5px;
    }

    /* ===== KEGIATAN ===== */
    .kegiatan-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1.5rem;
    }

    @media (max-width: 700px) { .kegiatan-grid { grid-template-columns: 1fr; } }

    .kegiatan-card {
      background: var(--forest3);
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: 14px;
      overflow: hidden;
      transition: all 0.3s ease;
      display: flex;
      flex-direction: column;
    }

    .kegiatan-card:hover {
      border-color: rgba(201,148,62,0.22);
      transform: translateY(-4px);
      box-shadow: 0 14px 40px rgba(0,0,0,0.3);
    }

    .kegiatan-thumb {
      height: 180px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 3rem;
    }

    .kegiatan-body { padding: 1.5rem; flex: 1; }

    .kegiatan-date {
      font-size: 0.72rem;
      color: var(--gold);
      letter-spacing: 0.1em;
      text-transform: uppercase;
      margin-bottom: 0.5rem;
      font-weight: 600;
    }

    .kegiatan-title { font-weight: 700; font-size: 1rem; color: var(--white); margin-bottom: 0.5rem; line-height: 1.4; }
    .kegiatan-desc { font-size: 0.85rem; color: var(--cream-muted); line-height: 1.65; }

    /* ===== PENGURUS ===== */
    .pengurus-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
    }

    @media (max-width: 900px) { .pengurus-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 550px) { .pengurus-grid { grid-template-columns: 1fr; } }

    .pengurus-card {
      background: var(--forest2);
      border: 1px solid rgba(255,255,255,0.07);
      border-radius: 16px;
      padding: 2rem 1.5rem;
      text-align: center;
      transition: all 0.3s ease;
    }

    .pengurus-card:hover {
      border-color: rgba(201,148,62,0.25);
      transform: translateY(-4px);
    }

    .pengurus-avatar {
      width: 72px; height: 72px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      margin: 0 auto 1rem;
      font-family: 'Playfair Display', serif;
      font-weight: 800;
      color: var(--forest);
    }

    .pengurus-name { font-weight: 700; font-size: 1rem; color: var(--white); margin-bottom: 0.3rem; }
    .pengurus-jabatan { font-size: 0.78rem; color: var(--gold); letter-spacing: 0.05em; text-transform: uppercase; font-weight: 600; margin-bottom: 0.5rem; }
    .pengurus-info { font-size: 0.82rem; color: var(--cream-muted); }

    /* ===== QUOTES ===== */
    .quote-card {
      background: rgba(255,255,255,0.03);
      border: 1px solid rgba(255,255,255,0.07);
      border-radius: 20px;
      padding: 3rem;
      max-width: 660px;
      margin: 0 auto;
      text-align: center;
      transition: transform 0.4s ease;
    }

    .quote-card:hover { transform: translateY(-4px); }

    .quote-top-line {
      width: 40px; height: 2px;
      background: linear-gradient(90deg, var(--gold), var(--emerald-light));
      margin: 0 auto 1.5rem;
      border-radius: 2px;
    }

    .quote-arabic {
      font-family: 'Amiri', serif;
      font-size: 1.3rem;
      color: rgba(201,148,62,0.5);
      margin-bottom: 1rem;
      direction: rtl;
      font-style: italic;
    }

    .quote-text {
      font-size: 1.1rem;
      font-style: italic;
      color: var(--cream);
      line-height: 1.8;
      margin-bottom: 1.75rem;
    }

    .quote-meta { display: flex; flex-direction: column; align-items: center; gap: 4px; }
    .quote-name { font-weight: 700; color: var(--gold-light); font-size: 0.95rem; }
    .quote-role { font-size: 0.78rem; color: var(--cream-muted); }

    .carousel-nav {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 1rem;
      margin-top: 2rem;
    }

    .carousel-btn {
      width: 40px; height: 40px;
      background: rgba(255,255,255,0.04);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s;
      color: var(--cream-muted);
    }

    .carousel-btn:hover {
      background: rgba(201,148,62,0.12);
      border-color: rgba(201,148,62,0.3);
      color: var(--gold-light);
    }

    .dots { display: flex; gap: 6px; }

    .dot {
      width: 6px; height: 6px;
      background: rgba(255,255,255,0.2);
      border-radius: 50%;
      cursor: pointer;
      transition: all 0.3s;
    }

    .dot.active { background: var(--gold); width: 20px; border-radius: 3px; }

    /* ===== FOOTER ===== */
    footer {
      background: var(--forest2);
      border-top: 1px solid rgba(201,148,62,0.15);
      padding: 4rem 0 2rem;
    }

    .footer-inner { max-width: 1200px; margin: 0 auto; padding: 0 2rem; }

    .footer-grid {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1.5fr;
      gap: 3rem;
      margin-bottom: 3rem;
    }

    @media (max-width: 768px) { .footer-grid { grid-template-columns: 1fr 1fr; gap: 2rem; } }
    @media (max-width: 480px) { .footer-grid { grid-template-columns: 1fr; } }

    .footer-brand-name { font-family: 'Playfair Display', serif; font-size: 1.1rem; font-weight: 800; color: var(--white); margin-bottom: 0.5rem; }
    .footer-tagline { font-family: 'Amiri', serif; font-size: 0.9rem; color: rgba(201,148,62,0.6); margin-bottom: 0.75rem; font-style: italic; }
    .footer-p { font-size: 0.85rem; color: var(--cream-muted); line-height: 1.75; max-width: 280px; }

    .footer-socials { display: flex; gap: 8px; margin-top: 1.25rem; }

    .social-icon {
      width: 36px; height: 36px;
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--cream-muted);
      font-size: 0.85rem;
      text-decoration: none;
      transition: all 0.3s;
    }

    .social-icon:hover {
      background: rgba(201,148,62,0.12);
      border-color: rgba(201,148,62,0.3);
      color: var(--gold-light);
      transform: translateY(-2px);
    }

    .footer-heading { font-size: 0.7rem; font-weight: 700; letter-spacing: 0.15em; text-transform: uppercase; color: var(--cream-muted); margin-bottom: 1.1rem; }
    .footer-link { display: block; color: var(--cream-muted); text-decoration: none; font-size: 0.86rem; padding: 0.28rem 0; transition: color 0.25s; }
    .footer-link:hover { color: var(--gold-light); }

    .footer-contact { display: flex; align-items: flex-start; gap: 8px; margin-bottom: 0.75rem; font-size: 0.86rem; color: var(--cream-muted); }
    .footer-contact svg { width: 14px; height: 14px; stroke: var(--gold); fill: none; flex-shrink: 0; margin-top: 2px; }

    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,0.06);
      padding-top: 1.5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 0.75rem;
    }

    .footer-copy { font-size: 0.8rem; color: var(--cream-muted); }

    /* ===== WA FLOAT ===== */
    .wa-float {
      position: fixed;
      bottom: 1.8rem; right: 1.8rem;
      z-index: 9999;
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      gap: 10px;
    }

    .wa-label {
      background: var(--white);
      color: #111;
      font-family: 'DM Sans', sans-serif;
      font-size: 0.8rem;
      font-weight: 600;
      padding: 0.45rem 1rem;
      border-radius: 20px;
      box-shadow: 0 6px 24px rgba(0,0,0,0.15);
      white-space: nowrap;
      opacity: 0;
      transform: translateX(8px);
      transition: all 0.3s;
      pointer-events: none;
    }

    .wa-float:hover .wa-label { opacity: 1; transform: translateX(0); }

    .wa-btn {
      width: 54px; height: 54px;
      background: #25d366;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      font-size: 1.5rem;
      box-shadow: 0 6px 22px rgba(37,211,102,0.4);
      transition: all 0.3s;
      position: relative;
    }

    .wa-btn:hover { transform: scale(1.08); box-shadow: 0 10px 30px rgba(37,211,102,0.55); }

    .wa-btn::before {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: 14px;
      background: rgba(37,211,102,0.3);
      animation: wa-ring 2.5s ease-out infinite;
    }

    @keyframes wa-ring {
      0% { transform: scale(1); opacity: 0.6; }
      70% { transform: scale(1.55); opacity: 0; }
      100% { transform: scale(1.55); opacity: 0; }
    }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar" id="mainNav">
  <div class="nav-inner">
    <a class="nav-brand" href="#">
      <div class="brand-logo">
        <img src="<?php echo e(asset('gambar/ipnu-removebg-preview.png')); ?>" alt="Logo IPNU IPPNU">
      </div>
      <div class="brand-text-wrap">
        <div class="brand-title">IPNU IPPNU Ranting Gapuro</div>
        <span class="brand-sub">Pelajar Nahdlatul Ulama</span>
      </div>
    </a>

    <ul class="nav-links" id="navLinks">
      <li><a href="#home" class="active">Beranda</a></li>
      <li><a href="#anggota">Anggota</a></li>
      <li><a href="#program">Program</a></li>
      <li><a href="#kegiatan">Kegiatan</a></li>
      <li><a href="#pengurus">Pengurus</a></li>
      <li><a href="#quotes">Motivasi</a></li>
      <li><a href="/admin/login" class="btn-nav-cta">Login Admin</a></li>
    </ul>

    <div class="nav-burger" onclick="document.getElementById('navLinks').classList.toggle('open')">
      <span></span><span></span><span></span>
    </div>
  </div>
</nav>

<!-- HERO -->
<header id="home">
  <div class="hero-bg-orbs">
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
  </div>
  <div class="geo-pattern"></div>

  <div class="hero-container">
    <div class="hero-left">
      <div class="hero-eyebrow">
        <div class="eyebrow-line"></div>
        <span class="eyebrow-text">Organisasi Pelajar Islam</span>
      </div>

      <h1 class="hero-title">
        Bersama Membangun<br>
        <span class="italic">Generasi</span> <span class="gold">Bangsa</span>
      </h1>

      <div class="hero-arabic">إِنَّ مَعَ الْعُسْرِ يُسْرًا</div>

      <p class="hero-desc">
        IPNU & IPPNU adalah organisasi pelajar yang berkomitmen mencetak generasi Muslim yang berilmu, berakhlak mulia, dan berwawasan kebangsaan di bawah naungan Nahdlatul Ulama.
      </p>

      <div class="hero-actions">
        <a href="#anggota" class="btn-primary">
          <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
          Lihat Anggota
        </a>
        <a href="#program" class="btn-outline">
          <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          Program Kerja
        </a>
      </div>
    </div>

    <div class="hero-visual">
      <div class="emblem-large">
        <div class="emblem-ring"></div>
        <div class="emblem-ring emblem-ring-2"></div>
        <div class="emblem-center">
          <div class="emblem-icon">🌙</div>
          <div class="emblem-label">IPNU · IPPNU</div>
        </div>
        <div class="float-badge float-badge-1"> IPNU IPPNU Aktif</div>
        <div class="float-badge float-badge-2"> Pelajar Berprestasi</div>
        <div class="float-badge float-badge-3"> Ahlussunnah</div>
      </div>
    </div>
  </div>
</header>

<!-- STATS STRIP -->
<div class="stats-strip">
  <div class="stats-inner">
    <div class="stat-item reveal">
      <span class="stat-num" data-target="850">0</span>
      <div class="stat-label">Total Anggota</div>
    </div>
    <div class="stat-item reveal rd1">
      <span class="stat-num" data-target="12">0</span>
      <div class="stat-label">Komisariat</div>
    </div>
    <div class="stat-item reveal rd2">
      <span class="stat-num" data-target="24">0</span>
      <div class="stat-label">Program Kerja</div>
    </div>
    <div class="stat-item reveal rd3">
      <span class="stat-num" data-target="95">0</span>
      <div class="stat-label">% Aktif Berkegiatan</div>
    </div>
  </div>
</div>

<!-- ANGGOTA SECTION -->
<section id="anggota">
  <div class="section-wrap">
    <div class="section-header reveal">
      <div class="section-eyebrow">
        <div class="line"></div>
        <span>Database Anggota</span>
        <div class="line"></div>
      </div>
      <h2 class="section-title">Data <em>Keanggotaan</em></h2>
      <p class="section-desc">Informasi anggota IPNU & IPPNU yang telah terverifikasi oleh pengurus.</p>
    </div>

    <div class="filter-bar reveal">
      <div class="search-wrap">
        <svg viewBox="0 0 24 24" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
        <input type="text" class="search-input" id="searchAnggota" placeholder="Cari nama anggota...">
      </div>
      <div style="font-size:0.78rem;color:var(--cream-muted);white-space:nowrap;display:flex;align-items:center;gap:6px;">
        <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
        Filter aktif
      </div>
    </div>

    <div class="table-wrap reveal" id="tableWrap">
      <table id="anggotaTable">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Anggota</th>
            <th>Organisasi</th>
            <th>Komisariat</th>
            <th>Status</th>
            <th>Domisili</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><div class="avatar-cell"><div class="avatar-circle" style="background:linear-gradient(135deg,#2d7a4f,#3da369);">MR</div><span>Muhammad Rizky</span></div></td>
            <td><span class="badge-ipnu">IPNU</span></td>
            <td>Komisariat Al-Huda</td>
            <td><span class="badge-ipnu badge-pengurus">Pengurus</span></td>
            <td style="color:var(--cream-muted);">Pekalongan Utara</td>
          </tr>
          <tr>
            <td>2</td>
            <td><div class="avatar-cell"><div class="avatar-circle" style="background:linear-gradient(135deg,#c9943e,#e4b563);">SA</div><span>Siti Aisyah</span></div></td>
            <td><span class="badge-ipnu badge-ippnu">IPPNU</span></td>
            <td>Komisariat Nurul Huda</td>
            <td><span class="badge-ipnu">Anggota</span></td>
            <td style="color:var(--cream-muted);">Pekalongan Selatan</td>
          </tr>
          <tr>
            <td>3</td>
            <td><div class="avatar-cell"><div class="avatar-circle" style="background:linear-gradient(135deg,#7c3aed,#a855f7);">FA</div><span>Fajar Abdurrahman</span></div></td>
            <td><span class="badge-ipnu">IPNU</span></td>
            <td>Komisariat Baitul Ilmi</td>
            <td><span class="badge-ipnu badge-pengurus">Pengurus</span></td>
            <td style="color:var(--cream-muted);">Pekalongan Barat</td>
          </tr>
          <tr>
            <td>4</td>
            <td><div class="avatar-cell"><div class="avatar-circle" style="background:linear-gradient(135deg,#0891b2,#06b6d4);">NH</div><span>Nur Halimah</span></div></td>
            <td><span class="badge-ipnu badge-ippnu">IPPNU</span></td>
            <td>Komisariat Al-Huda</td>
            <td><span class="badge-ipnu">Anggota</span></td>
            <td style="color:var(--cream-muted);">Pekalongan Timur</td>
          </tr>
          <tr>
            <td>5</td>
            <td><div class="avatar-cell"><div class="avatar-circle" style="background:linear-gradient(135deg,#059669,#10b981);">AM</div><span>Ahmad Maulana</span></div></td>
            <td><span class="badge-ipnu">IPNU</span></td>
            <td>Komisariat Nurul Huda</td>
            <td><span class="badge-ipnu">Anggota</span></td>
            <td style="color:var(--cream-muted);">Batang</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="pagination-bar reveal">
      <div class="page-info">Menampilkan <strong>1–10</strong> dari <strong>850</strong> anggota</div>
      <div class="page-btns">
        <a href="#" class="page-btn" style="opacity:0.4;pointer-events:none;">
          <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
          Sebelumnya
        </a>
        <a href="#" class="page-btn">
          Selanjutnya
          <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- PROGRAM SECTION -->
<section id="program" style="padding:6rem 0;background:var(--forest2);position:relative;">
  <div class="section-wrap">
    <div class="section-header reveal">
      <div class="section-eyebrow">
        <div class="line"></div>
        <span>Program Unggulan</span>
        <div class="line"></div>
      </div>
      <h2 class="section-title">Program <em>Kerja</em> Kami</h2>
      <p class="section-desc">Berbagai program yang kami jalankan untuk mengembangkan potensi pelajar Muslim.</p>
    </div>

    <div class="program-grid">
      <div class="program-card reveal rd1">
        <div class="program-icon" style="background:rgba(45,122,79,0.15);">📖</div>
        <div class="program-title">Kajian Kitab Kuning</div>
        <div class="program-desc">Program rutin pembacaan dan diskusi kitab klasik ulama Ahlussunnah wal Jamaah bersama ustadz pembimbing.</div>
        <span class="program-tag" style="background:rgba(45,122,79,0.12);color:#6ee7b7;border:1px solid rgba(45,122,79,0.25);">Rutin Mingguan</span>
      </div>
      <div class="program-card reveal rd2">
        <div class="program-icon" style="background:rgba(201,148,62,0.12);">🎓</div>
        <div class="program-title">Bimbingan Belajar Gratis</div>
        <div class="program-desc">Layanan bimbel cuma-cuma untuk pelajar kurang mampu, diselenggarakan oleh anggota IPNU-IPPNU berprestasi.</div>
        <span class="program-tag" style="background:rgba(201,148,62,0.1);color:var(--gold-light);border:1px solid rgba(201,148,62,0.22);">Sosial</span>
      </div>
      <div class="program-card reveal rd3">
        <div class="program-icon" style="background:rgba(99,102,241,0.12);">💻</div>
        <div class="program-title">Pelatihan Digital Skill</div>
        <div class="program-desc">Workshop desain grafis, coding, dan media sosial untuk mempersiapkan anggota menghadapi era digital.</div>
        <span class="program-tag" style="background:rgba(99,102,241,0.1);color:#a5b4fc;border:1px solid rgba(99,102,241,0.22);">Pengembangan</span>
      </div>
      <div class="program-card reveal rd1">
        <div class="program-icon" style="background:rgba(239,68,68,0.1);">🤝</div>
        <div class="program-title">Bakti Sosial</div>
        <div class="program-desc">Kegiatan sosial kemasyarakatan: donor darah, santunan anak yatim, dan pembersihan lingkungan masjid.</div>
        <span class="program-tag" style="background:rgba(239,68,68,0.09);color:#fca5a5;border:1px solid rgba(239,68,68,0.22);">Kemasyarakatan</span>
      </div>
      <div class="program-card reveal rd2">
        <div class="program-icon" style="background:rgba(16,185,129,0.1);">🌍</div>
        <div class="program-title">Forum Diskusi Kebangsaan</div>
        <div class="program-desc">Diskusi terbuka tentang isu kebangsaan, moderasi beragama, dan peran Islam dalam kehidupan demokratis.</div>
        <span class="program-tag" style="background:rgba(16,185,129,0.1);color:#34d399;border:1px solid rgba(16,185,129,0.22);">Intelektual</span>
      </div>
      <div class="program-card reveal rd3">
        <div class="program-icon" style="background:rgba(245,158,11,0.1);">⭐</div>
        <div class="program-title">Lomba & Festival Seni</div>
        <div class="program-desc">Ajang kompetisi dan ekspresi seni islami: kaligrafi, tilawah, hadrah, dan seni budaya nusantara.</div>
        <span class="program-tag" style="background:rgba(245,158,11,0.09);color:#fcd34d;border:1px solid rgba(245,158,11,0.22);">Budaya</span>
      </div>
    </div>
  </div>
</section>

<!-- KEGIATAN SECTION -->
<section id="kegiatan" style="padding:6rem 0;background:var(--forest);position:relative;">
  <div class="section-wrap">
    <div class="section-header reveal">
      <div class="section-eyebrow">
        <div class="line"></div>
        <span>Berita & Kegiatan</span>
        <div class="line"></div>
      </div>
      <h2 class="section-title">Kabar <em>Terkini</em></h2>
      <p class="section-desc">Dokumentasi dan liputan kegiatan IPNU & IPPNU terbaru.</p>
    </div>

    <div class="kegiatan-grid">
      <div class="kegiatan-card reveal rd1">
        <div class="kegiatan-thumb" style="background:linear-gradient(135deg,rgba(45,122,79,0.4),rgba(13,36,24,0.8));">🕌</div>
        <div class="kegiatan-body">
          <div class="kegiatan-date">12 Januari 2025</div>
          <div class="kegiatan-title">Pelantikan Pengurus IPNU-IPPNU Periode 2025–2027</div>
          <div class="kegiatan-desc">Pelantikan pengurus baru dihadiri Ketua PCNU dan berlangsung khidmat di Aula Islamic Center Kota Pekalongan.</div>
        </div>
      </div>
      <div class="kegiatan-card reveal rd2">
        <div class="kegiatan-thumb" style="background:linear-gradient(135deg,rgba(201,148,62,0.3),rgba(13,36,24,0.8));">📚</div>
        <div class="kegiatan-body">
          <div class="kegiatan-date">25 Januari 2025</div>
          <div class="kegiatan-title">Makesta (Masa Kesetiaan Anggota) Angkatan XXXIV</div>
          <div class="kegiatan-desc">Penerimaan anggota baru yang berlangsung tiga hari dengan rangkaian materi ke-NU-an dan ke-IPNU-an.</div>
        </div>
      </div>
      <div class="kegiatan-card reveal rd3">
        <div class="kegiatan-thumb" style="background:linear-gradient(135deg,rgba(99,102,241,0.3),rgba(13,36,24,0.8));">🏆</div>
        <div class="kegiatan-body">
          <div class="kegiatan-date">8 Februari 2025</div>
          <div class="kegiatan-title">Juara 1 Lomba Kaligrafi Tingkat Provinsi Jawa Tengah</div>
          <div class="kegiatan-desc">Perwakilan IPPNU berhasil meraih juara pertama dalam cabang kaligrafi Mushaf di MTQ Pelajar Jawa Tengah.</div>
        </div>
      </div>
      <div class="kegiatan-card reveal rd4">
        <div class="kegiatan-thumb" style="background:linear-gradient(135deg,rgba(16,185,129,0.3),rgba(13,36,24,0.8));">🤝</div>
        <div class="kegiatan-body">
          <div class="kegiatan-date">14 Februari 2025</div>
          <div class="kegiatan-title">Bakti Sosial & Donor Darah Bersama PMI Kota Pekalongan</div>
          <div class="kegiatan-desc">Lebih dari 80 anggota berpartisipasi dalam kegiatan donor darah dan pembagian paket sembako untuk warga.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PENGURUS SECTION -->
<section id="pengurus" style="padding:6rem 0;background:var(--forest2);position:relative;">
  <div class="section-wrap">
    <div class="section-header reveal">
      <div class="section-eyebrow">
        <div class="line"></div>
        <span>Struktur Organisasi</span>
        <div class="line"></div>
      </div>
      <h2 class="section-title">Pengurus <em>Inti</em></h2>
      <p class="section-desc">Pengurus harian IPNU & IPPNU periode 2025–2027.</p>
    </div>

    <div class="pengurus-grid">
      <div class="pengurus-card reveal rd1">
        <div class="pengurus-avatar" style="background:linear-gradient(135deg,#c9943e,#e4b563);">MF</div>
        <div class="pengurus-name">Muhammad Faris</div>
        <div class="pengurus-jabatan">Ketua IPNU</div>
        <div class="pengurus-info">Komisariat Al-Huda · Angkatan 2022</div>
      </div>
      <div class="pengurus-card reveal rd2">
        <div class="pengurus-avatar" style="background:linear-gradient(135deg,#2d7a4f,#3da369);">RH</div>
        <div class="pengurus-name">Rahmah Hidayati</div>
        <div class="pengurus-jabatan">Ketua IPPNU</div>
        <div class="pengurus-info">Komisariat Nurul Huda · Angkatan 2022</div>
      </div>
      <div class="pengurus-card reveal rd3">
        <div class="pengurus-avatar" style="background:linear-gradient(135deg,#7c3aed,#a855f7);">AZ</div>
        <div class="pengurus-name">Ahmad Zainudin</div>
        <div class="pengurus-jabatan">Sekretaris Umum</div>
        <div class="pengurus-info">Komisariat Baitul Ilmi · Angkatan 2023</div>
      </div>
      <div class="pengurus-card reveal rd1">
        <div class="pengurus-avatar" style="background:linear-gradient(135deg,#0891b2,#06b6d4);">LN</div>
        <div class="pengurus-name">Laila Nur Fitri</div>
        <div class="pengurus-jabatan">Bendahara Umum</div>
        <div class="pengurus-info">Komisariat Al-Huda · Angkatan 2023</div>
      </div>
      <div class="pengurus-card reveal rd2">
        <div class="pengurus-avatar" style="background:linear-gradient(135deg,#059669,#10b981);">DA</div>
        <div class="pengurus-name">Dimas Akhsanu</div>
        <div class="pengurus-jabatan">Ketua Bid. Kaderisasi</div>
        <div class="pengurus-info">Komisariat Nurul Huda · Angkatan 2023</div>
      </div>
      <div class="pengurus-card reveal rd3">
        <div class="pengurus-avatar" style="background:linear-gradient(135deg,#ec4899,#f43f5e);">FU</div>
        <div class="pengurus-name">Fatimah Ulya</div>
        <div class="pengurus-jabatan">Ketua Bid. Pendidikan</div>
        <div class="pengurus-info">Komisariat Al-Huda · Angkatan 2024</div>
      </div>
    </div>
  </div>
</section>

<!-- QUOTES / MOTIVASI SECTION -->
<section id="quotes" style="padding:6rem 0;background:var(--forest);position:relative;overflow:hidden;">
  <div class="section-wrap" style="position:relative;z-index:1;">
    <div class="section-header reveal">
      <div class="section-eyebrow">
        <div class="line"></div>
        <span>Motivasi & Inspirasi</span>
        <div class="line"></div>
      </div>
      <h2 class="section-title">Kata <em>Mereka</em></h2>
      <p class="section-desc">Motivasi dan kisah inspiratif dari anggota IPNU & IPPNU.</p>
    </div>

    <div class="reveal">
      <div id="quoteCarousel">
        <div class="quote-card" id="quoteCard">
          <div class="quote-top-line"></div>
          <div class="quote-arabic" id="quoteArabic">طَلَبُ الْعِلْمِ فَرِيضَةٌ عَلَى كُلِّ مُسْلِمٍ</div>
          <p class="quote-text" id="quoteText">"Bergabung dengan IPNU membuka mata saya bahwa Islam adalah agama yang ramah, ilmiah, dan penuh kasih. Saya belajar berdebat dengan adab, berprinsip dengan akhlak."</p>
          <div class="quote-meta">
            <span class="quote-name" id="quoteName">Ahmad Fauzi</span>
            <span class="quote-role" id="quoteRole">Ketua Komisariat Al-Huda · IPNU 2022</span>
          </div>
        </div>
      </div>

      <div class="carousel-nav">
        <button class="carousel-btn" onclick="prevQuote()">
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
        </button>
        <div class="dots" id="quoteDots">
          <div class="dot active"></div>
          <div class="dot"></div>
          <div class="dot"></div>
        </div>
        <button class="carousel-btn" onclick="nextQuote()">
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section style="padding:5rem 0;background:var(--forest2);border-top:1px solid rgba(201,148,62,0.12);border-bottom:1px solid rgba(201,148,62,0.12);position:relative;overflow:hidden;">
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse at 50% 50%,rgba(45,122,79,0.1) 0%,transparent 70%);pointer-events:none;"></div>
  <div class="section-wrap" style="text-align:center;position:relative;z-index:1;">
    <div class="reveal">
      <div class="section-eyebrow" style="justify-content:center;margin-bottom:1rem;">
        <div class="line"></div>
        <span>Bergabung Sekarang</span>
        <div class="line"></div>
      </div>
      <h2 class="section-title" style="margin-bottom:0.75rem;">Jadilah Bagian dari <em>Keluarga Besar</em></h2>
      <p class="section-desc" style="margin-bottom:2.5rem;">Daftarkan diri Anda dan mulailah perjalanan sebagai pelajar muslim yang berdedikasi bersama IPNU & IPPNU.</p>
      <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
        <a href="#anggota" class="btn-primary">
          <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>
          Daftar Anggota
        </a>
        <a href="#program" class="btn-outline">
          Lihat Program
        </a>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div class="footer-grid">
      <div>
        <div class="footer-brand-name">IPNU · IPPNU</div>
        <div class="footer-tagline">Pelajar Nahdlatul Ulama</div>
        <p class="footer-p">Portal resmi IPNU & IPPNU Kota Pekalongan. Bersama membangun generasi Islam yang berilmu, berakhlak, dan berbudaya.</p>
        <div class="footer-socials">
          <a href="#" class="social-icon">
            <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
          <a href="#" class="social-icon">
            <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <a href="#" class="social-icon">
            <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
          </a>
        </div>
      </div>

      <div>
        <div class="footer-heading">Navigasi</div>
        <a href="#home" class="footer-link">Beranda</a>
        <a href="#anggota" class="footer-link">Data Anggota</a>
        <a href="#program" class="footer-link">Program Kerja</a>
        <a href="#kegiatan" class="footer-link">Kegiatan</a>
        <a href="#pengurus" class="footer-link">Pengurus</a>
        <a href="#quotes" class="footer-link">Motivasi</a>
      </div>

      <div>
        <div class="footer-heading">Organisasi</div>
        <a href="#" class="footer-link">Tentang IPNU</a>
        <a href="#" class="footer-link">Tentang IPPNU</a>
        <a href="#" class="footer-link">Sejarah</a>
        <a href="#" class="footer-link">AD/ART</a>
        <a href="/admin/login" class="footer-link">Login Admin</a>
        <a href="/register" class="footer-link">Daftar Anggota</a>
      </div>

      <div>
        <div class="footer-heading">Kontak</div>
        <div class="footer-contact">
          <svg viewBox="0 0 24 24" stroke-width="1.5"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          ipnu.pekalongan@gmail.com
        </div>
        <div class="footer-contact">
          <svg viewBox="0 0 24 24" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 13.5 19.79 19.79 0 01.07 4.9 2 2 0 012 2.72h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 10.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          +62 812 3456 7890
        </div>
        <div class="footer-contact">
          <svg viewBox="0 0 24 24" stroke-width="1.5"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          Jl. Nusantara No. 12, Pekalongan
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="footer-copy">© 2025 IPNU · IPPNU Kota Pekalongan. Hak Cipta Dilindungi.</div>
      <div style="font-family:'Amiri',serif;font-style:italic;color:rgba(201,148,62,0.6);font-size:0.8rem;">
        Nahdlatul Ulama — Khidmah Lillah
      </div>
    </div>
  </div>
</footer>

<!-- WA FLOAT -->
<div class="wa-float">
  <span class="wa-label">💬 Hubungi Pengurus via WhatsApp</span>
  <a href="https://wa.me/6281234567890?text=Assalamu'alaikum%20admin%20IPNU%20IPPNU%2C%20saya%20ingin%20bertanya."
     target="_blank" class="wa-btn" title="Chat WhatsApp">
    <span style="font-size:1.5rem;">💬</span>
  </a>
</div>

<script>
  // NAVBAR SCROLL
  const nav = document.getElementById('mainNav');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 40);
    const sections = document.querySelectorAll('section, header');
    let cur = '';
    sections.forEach(s => { if (window.scrollY >= s.offsetTop - 120) cur = s.id; });
    document.querySelectorAll('.nav-links a').forEach(a => {
      a.classList.toggle('active', a.getAttribute('href') === '#' + cur);
    });
  });

  // SCROLL REVEAL
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => e.target.classList.toggle('visible', e.isIntersecting));
  }, { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(el => obs.observe(el));

  // COUNTER
  const counterObs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        const el = e.target;
        if (el._done) return;
        el._done = true;
        const target = parseInt(el.dataset.target);
        const suffix = target === 95 ? '%' : '+';
        let cur = 0;
        const step = target / 60;
        const timer = setInterval(() => {
          cur += step;
          if (cur >= target) { cur = target; clearInterval(timer); }
          el.textContent = Math.floor(cur) + suffix;
        }, 25);
      }
    });
  }, { threshold: 0.5 });
  document.querySelectorAll('[data-target]').forEach(n => counterObs.observe(n));

  // SEARCH
  document.getElementById('searchAnggota')?.addEventListener('input', function() {
    const q = this.value.toLowerCase();
    document.querySelectorAll('#anggotaTable tbody tr').forEach(row => {
      row.style.display = row.textContent.toLowerCase().includes(q) ? '' : 'none';
    });
  });

  // QUOTE CAROUSEL
  const quotes = [
    {
      arabic: 'طَلَبُ الْعِلْمِ فَرِيضَةٌ عَلَى كُلِّ مُسْلِمٍ',
      text: '"Bergabung dengan IPNU membuka mata saya bahwa Islam adalah agama yang ramah, ilmiah, dan penuh kasih. Saya belajar berdebat dengan adab, berprinsip dengan akhlak."',
      name: 'Ahmad Fauzi',
      role: 'Ketua Komisariat Al-Huda · IPNU 2022'
    },
    {
      arabic: 'إِنَّ مَعَ الْعُسْرِ يُسْرًا',
      text: '"IPPNU mengajarkan saya bahwa perempuan muslimah adalah tonggak peradaban. Di sini saya menemukan keberanian untuk bersuara, belajar, dan berkontribusi untuk umat."',
      name: 'Nur Aini Rahmawati',
      role: 'Koordinator Bidang Pendidikan · IPPNU 2023'
    },
    {
      arabic: 'خَيْرُ النَّاسِ أَنْفَعُهُمْ لِلنَّاسِ',
      text: '"Melalui program bakti sosial IPNU, saya belajar bahwa pengabdian adalah bentuk tertinggi dari keimanan. Setiap tetes keringat untuk sesama adalah ibadah yang tak ternilai."',
      name: 'Dimas Kurniawan',
      role: 'Anggota Aktif · IPNU Komisariat Baitul Ilmi'
    }
  ];

  let currentQuote = 0;
  const dots = document.querySelectorAll('#quoteDots .dot');

  function updateQuote(idx) {
    const q = quotes[idx];
    const card = document.getElementById('quoteCard');
    card.style.opacity = '0';
    card.style.transform = 'translateY(10px)';
    setTimeout(() => {
      document.getElementById('quoteArabic').textContent = q.arabic;
      document.getElementById('quoteText').textContent = q.text;
      document.getElementById('quoteName').textContent = q.name;
      document.getElementById('quoteRole').textContent = q.role;
      card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
      card.style.opacity = '1';
      card.style.transform = 'translateY(0)';
    }, 250);
    dots.forEach((d, i) => d.classList.toggle('active', i === idx));
  }

  function nextQuote() {
    currentQuote = (currentQuote + 1) % quotes.length;
    updateQuote(currentQuote);
  }

  function prevQuote() {
    currentQuote = (currentQuote - 1 + quotes.length) % quotes.length;
    updateQuote(currentQuote);
  }

  dots.forEach((d, i) => d.addEventListener('click', () => {
    currentQuote = i;
    updateQuote(i);
  }));

  setInterval(nextQuote, 5000);
</script>

</body>
</html><?php /**PATH C:\ProjekIPNU\projekukk_MRafiAssidiqi_XIIRPL11\resources\views/user/index.blade.php ENDPATH**/ ?>