<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $appName ?? 'Continuous Integration with Laravel' }}</title>
    <style>
        :root{--bg:#0b1220;--card:#0f1724;--muted:#9ca3af;--accent:#ff2d20}
        *{box-sizing:border-box}
        html,body{height:100%;margin:0;font-family:Inter,ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial}
        body{display:flex;align-items:center;justify-content:center;background:linear-gradient(180deg,#071024 0%, #07172a 100%);color:#e6eef8}
        .card{background:linear-gradient(180deg,var(--card),#0b1220);padding:28px;border-radius:12px;box-shadow:0 10px 30px rgba(2,6,23,.6);max-width:760px;width:92%;text-align:center}
        .robot{width:120px;height:120px;margin:0 auto 18px}
        h1{margin:0;font-size:20px;letter-spacing:.2px}
        p{color:var(--muted);margin:14px 0 0}
        .meta{margin-top:18px;font-size:13px;color:var(--muted)}
        .btn{display:inline-block;margin-top:18px;padding:10px 16px;border-radius:8px;background:var(--accent);color:#fff;text-decoration:none;font-weight:600}
        @media (min-width:640px){h1{font-size:24px}.robot{width:140px;height:140px}}
    </style>
</head>
<body>
<main class="card" role="main" aria-labelledby="title">
    <svg class="robot" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <rect x="6" y="18" width="52" height="34" rx="6" fill="#0b1220" stroke="#1f2937" stroke-width="2"/>
        <rect x="20" y="6" width="24" height="14" rx="4" fill="#111827" stroke="#374151" stroke-width="2"/>
        <circle cx="24" cy="30" r="3.5" fill="#fff" fill-opacity=".95"/>
        <circle cx="40" cy="30" r="3.5" fill="#fff" fill-opacity=".95"/>
        <rect x="26" y="36" width="12" height="3" rx="1" fill="#9ca3af" opacity=".14"/>
        <rect x="30" y="46" width="4" height="4" rx="1" fill="#ff2d20"/>
        <rect x="10" y="28" width="4" height="6" rx="1" fill="#1f2937"/>
        <rect x="50" y="28" width="4" height="6" rx="1" fill="#1f2937"/>
    </svg>

    <h1 id="title">Olá! Eu sou seu robô de CI 🤖</h1>

    <p>
        Aplicação serve para testes de integração contínua com Runcloud.
        <strong>{{ $appName ?? 'Continuous Integration with Laravel' }}</strong>
    </p>

    <p>
        <i>
            Convertendo deploy padrão da Runcloud.io de simples Webhooks de deploy para github actions com testes unitários, múltiplos ambientes (teste, homologação, staging, produção, etc)
        </i>
    </p>

    <div class="meta">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} • PHP v{{ PHP_VERSION }}
    </div>

    <a class="btn" href="/">Home</a>
</main>
</body>
</html>
