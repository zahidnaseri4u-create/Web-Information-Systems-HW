<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'IT Student Portal')</title>
    <style>
        :root{--ink:#14213d;--muted:#68738a;--blue:#365cf5;--blue2:#2343c5;--line:#e6eaf2;--paper:#fff;--bg:#f4f7fc;--green:#137a52;--red:#b42338}
        *{box-sizing:border-box}body{margin:0;font-family:Inter,ui-sans-serif,system-ui,-apple-system,"Segoe UI",sans-serif;background:radial-gradient(circle at 10% 5%,#e3eaff 0,transparent 34%),var(--bg);color:var(--ink);min-height:100vh}
        a{color:var(--blue);text-decoration:none}a:hover{text-decoration:underline}.shell{width:min(1100px,calc(100% - 36px));margin:0 auto}
        .topbar{display:flex;align-items:center;justify-content:space-between;padding:25px 0}.brand{display:flex;align-items:center;gap:12px;font-weight:800;letter-spacing:-.03em;color:var(--ink)}
        .brand-mark{display:grid;place-items:center;width:42px;height:42px;border-radius:14px;color:#fff;background:linear-gradient(135deg,#5578ff,#243bc1);box-shadow:0 8px 20px #365cf533;font-size:20px}
        .top-note{color:var(--muted);font-size:13px}.hero{display:grid;grid-template-columns:1fr .85fr;gap:55px;align-items:center;padding:42px 0 76px}
        .eyebrow{display:inline-flex;gap:8px;align-items:center;color:var(--blue);font-size:12px;font-weight:800;text-transform:uppercase;letter-spacing:.13em}
        h1{font-size:clamp(34px,5vw,56px);line-height:1.04;letter-spacing:-.055em;margin:17px 0}.lead{font-size:16px;line-height:1.8;color:var(--muted);max-width:470px}
        .feature-list{display:flex;gap:18px;flex-wrap:wrap;margin-top:28px;color:#4b5871;font-size:13px}.feature-list span:before{content:"✓";color:var(--green);font-weight:900;margin-right:7px}
        .panel{background:var(--paper);border:1px solid #e8ecf5;border-radius:24px;padding:clamp(24px,4vw,38px);box-shadow:0 25px 70px #263f7412;animation:rise .55s ease both}
        .panel h2{font-size:25px;letter-spacing:-.04em;margin:0 0 8px}.sub{color:var(--muted);font-size:14px;margin:0 0 25px;line-height:1.6}
        .field{margin:17px 0}.field label{display:block;font-size:13px;font-weight:700;margin-bottom:8px}.field input{width:100%;padding:13px 14px;border:1px solid #dfe5f0;border-radius:11px;background:#fbfcff;font:inherit;font-size:14px;outline:none;transition:border .2s,box-shadow .2s}
        .field input:focus{border-color:var(--blue);box-shadow:0 0 0 4px #365cf51a;background:#fff}.btn{width:100%;border:0;border-radius:11px;padding:14px 17px;background:linear-gradient(135deg,#4e70ff,#2948d1);color:white;font-size:14px;font-weight:800;cursor:pointer;box-shadow:0 9px 20px #365cf52b;transition:transform .2s,box-shadow .2s}
        .btn:hover{transform:translateY(-2px);box-shadow:0 13px 24px #365cf538}.btn:active{transform:translateY(0)}.below{text-align:center;font-size:13px;color:var(--muted);margin:22px 0 0}
        .alert{padding:13px 15px;border-radius:12px;margin:0 0 18px;font-size:13px;line-height:1.6}.alert.success{background:#eaf8f1;color:#116b49;border:1px solid #c9efdc}.alert.error{background:#fff0f1;color:#9b2335;border:1px solid #ffd5da}.alert ul{padding-left:18px;margin:0}
        .dash-wrap{padding:30px 0 75px}.dash-head{display:flex;justify-content:space-between;align-items:center;gap:20px;margin-bottom:26px}.dash-head h1{font-size:38px;margin:8px 0}.logout{width:auto;padding:12px 18px}.welcome{background:linear-gradient(130deg,#263fc0,#5577ff);color:white;border-radius:24px;padding:35px;position:relative;overflow:hidden;box-shadow:0 20px 45px #304dd52b}.welcome:after{content:"";position:absolute;width:260px;height:260px;border:1px solid #ffffff2c;border-radius:50%;right:-70px;top:-110px;box-shadow:0 0 0 28px #ffffff0b,0 0 0 56px #ffffff08}.welcome h2{font-size:29px;letter-spacing:-.04em;margin:12px 0}.welcome p{color:#e3e9ff;line-height:1.7;margin-bottom:0}.info-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:18px;margin-top:20px}.info-card{padding:24px;border:1px solid var(--line);border-radius:18px;background:#fff}.info-card small{color:var(--muted);font-weight:700;text-transform:uppercase;letter-spacing:.08em}.info-card p{font-size:16px;font-weight:700;overflow-wrap:anywhere;margin-bottom:0}
        footer{text-align:center;color:#929bb0;font-size:12px;padding:0 0 24px}@keyframes rise{from{opacity:0;transform:translateY(14px)}to{opacity:1;transform:translateY(0)}}
        @media(max-width:800px){.hero{grid-template-columns:1fr;gap:30px;padding-top:20px}.hero-copy{padding:0 4px}.top-note{display:none}.info-grid{grid-template-columns:1fr}.dash-head{align-items:flex-start;flex-direction:column}.dash-head h1{font-size:32px}}
    </style>
</head>
<body>
    <header class="shell topbar">
        <a class="brand" href="{{ route('login') }}"><span class="brand-mark">✦</span><span>IT Student Portal</span></a>
        <span class="top-note">Learning today. Building tomorrow.</span>
    </header>
    <main class="shell">@yield('content')</main>
    <footer class="shell">IT Department · Laravel Authentication Lab · 2026</footer>
</body>
</html>
