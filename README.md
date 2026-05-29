<p align="center">
  <img src="public/images/enactuslogo.jpg" alt="Enactus Integrated Platform Logo" width="600">
</p>

<h1 align="center">🌍 Enactus Integrated Platform</h1>

<p align="center">
  <a href="https://laravel.com"><img src="https://raw.githubusercontent.com/Nkosi2000/Enactus-Integrated-Platform/main/public/images/laravel.svg" alt="Laravel" height="32"></a>&nbsp;&nbsp;
  <a href="https://www.php.net"><img src="public/images/php.svg" alt="PHP" height="32"></a>&nbsp;&nbsp;
  <a href="https://supabase.com/"><img src="public/images/supabase.svg" alt="Supabase" height="32"></a>&nbsp;&nbsp;
  <a href="https://coolify.io"><img src="public/images/coolify.svg" alt="Coolify" height="32"></a>&nbsp;&nbsp;
  <a href="https://www.cloudflare.com"><img src="public/images/cloudflare.svg" alt="Cloudflare" height="32"></a>&nbsp;&nbsp;
  <a href="https://www.hetzner.com"><img src="public/images/hetzner.svg" alt="Hetzner" height="32"></a>
</p>

<p align="center">
  <a href="#-features"><b>✨ Features</b></a> •
  <a href="#-tech-stack"><b>🧱 Tech Stack</b></a> •
  <a href="#-getting-started"><b>🚀 Getting Started</b></a> •
  <a href="#-authentication--roles"><b>🔐 Auth & Roles</b></a> •
  <a href="#-contributing"><b>🤝 Contributing</b></a> •
  <a href="#-license"><b>📄 License</b></a>
</p>

---

## 📖 About

The **Enactus Integrated Platform** is the central digital hub for Enactus South Africa. It brings together students, ventures, programme managers, and partners on one platform — enabling seamless collaboration, impact tracking, and real-time reporting across all university teams.

Designed with respect for South Africa's diverse population and POPIA compliance, the platform collects demographic data only for aggregated, anonymised reporting, with every field voluntary and a "prefer not to say" option.

---

## ✨ Features

<table>
  <tr>
    <td width="50%">
      <h4>👥 Student CRM</h4>
      <p>Comprehensive profiles, demographics, and engagement tracking with respect for privacy.</p>
    </td>
    <td width="50%">
      <h4>🚀 Venture Tracking</h4>
      <p>Projects from startup to scale-up, with stage updates, sectors, and multi‑year team histories.</p>
    </td>
  </tr>
  <tr>
    <td>
      <h4>📅 Programme Management</h4>
      <p>Create training, competitions, bootcamps and record attendance per student.</p>
    </td>
    <td>
      <h4>📝 Dynamic Form Submissions</h4>
      <p>Custom forms per programme with JSON storage – text, numbers, selects, file uploads.</p>
    </td>
  </tr>
  <tr>
    <td>
      <h4>📊 Monitoring & Evaluation</h4>
      <p>Period‑based metrics: revenue, jobs created, beneficiaries, funding raised, CAC.</p>
    </td>
    <td>
      <h4>🏆 Leaderboard</h4>
      <p>Score projects in startup/scale‑up stages and rank them per reporting cycle.</p>
    </td>
  </tr>
  <tr>
    <td>
      <h4>📚 LMS</h4>
      <p>Learning modules with progress tracking per student.</p>
    </td>
    <td>
      <h4>🔐 Role‑Based Access</h4>
      <p>8 user roles – student, faculty advisor, programme manager, business advisor, alumni, judge, board member, admin.</p>
    </td>
  </tr>
</table>

---

## 🧱 Tech Stack

| 🛠️ Layer               | ⚡ Technology                                                                 |
| :----------------------- | :-------------------------------------------------------------------------- |
| **Backend**              | ![Laravel](public/images/laravel.svg) Laravel (PHP)                         |
| **Database**             | ![Supabase](public/images/supabase.svg) PostgreSQL via Supabase             |
| **Authentication**       | 🔐 Session‑based with custom role middleware                                |
| **Frontend**             | 🎨 Blade + Tailwind CSS (planned)                                           |
| **Deployment**           | ![Coolify](public/images/coolify.svg) Coolify on ![Hetzner](public/images/hetzner.svg) Hetzner, proxied through ![Cloudflare](public/images/cloudflare.svg) |
| **Cache / Queue**        | 🗄️ Database driver (dev)                                                   |
| **Testing**              | 🧪 PHPUnit                                                                  |

> ⚠️ **For the icons to show on GitHub**, replace `public/images/...` paths with the raw GitHub URLs of your images. For example:  
> `https://raw.githubusercontent.com/Nkosi2000/Enactus-Integrated-Platform/main/public/images/laravel.svg`

---

## 🚀 Getting Started

### 📋 Prerequisites
- **PHP 8.4+** with extensions: `pgsql`, `pdo_pgsql`, `openssl`, `mbstring`, etc.
- **Composer**
- **Git**
- **An SSH key** (Ed25519 recommended)
- **A Hetzner server account** – ask the project lead to create one for you.

### 1️⃣ Clone the repo
```bash
git clone https://github.com/Nkosi2000/Enactus-Integrated-Platform.git
cd Enactus-Integrated-Platform