<p align="center">
  <a href="https://enactusza.org"><img src="https://raw.githubusercontent.com/.../public/images/enactuslogo2removebg.png" alt="Enactus Integrated Platform Logo" width="600"></a>
</p>

<h1 align="center"><img src="https://raw.githubusercontent.com/.../public/images/icon2.png" alt="Supabase" height="32"> Enactus Integrated Platform</h1>

<p align="center">
  <a href="https://laravel.com"><img src="https://raw.githubusercontent.com/Nkosi2000/Enactus-Integrated-Platform/public/images/laravel-color.svg" alt="Laravel" height="32"></a>&nbsp;&nbsp;
  <a href="https://www.php.net"><img src="https://raw.githubusercontent.com/Nkosi2000/Enactus-Integrated-Platform/main/public/images/php-color.svg" alt="PHP" height="32"></a>&nbsp;&nbsp;
  <a href="https://supabase.com/"><img src="https://raw.githubusercontent.com/Nkosi2000/Enactus-Integrated-Platform/main/public/images/supabase-color.svg" alt="Supabase" height="32"></a>&nbsp;&nbsp;
  <a href="https://coolify.io"><img src="https://raw.githubusercontent.com/Nkosi2000/Enactus-Integrated-Platform/main/public/images/coolify-color.svg" alt="Coolify" height="32"></a>&nbsp;&nbsp;
  <a href="https://www.cloudflare.com"><img src="https://raw.githubusercontent.com/Nkosi2000/Enactus-Integrated-Platform/main/public/images/cloudflare-color.svg" alt="Cloudflare" height="32"></a>&nbsp;&nbsp;
  <a href="https://www.hetzner.com"><img src="https://raw.githubusercontent.com/Nkosi2000/Enactus-Integrated-Platform/main/public/images/hetzner-color.svg" alt="Hetzner" height="32"></a>
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

<table>
  <tr>
    <td width="50%">
      <h4>🔧 Backend</h4>
      <p>
        <img src="https://raw.githubusercontent.com/Nkosi2000/Enactus-Integrated-Platform/" height="20"> Laravel<br>
        <img src="https://raw.githubusercontent.com/Nkosi2000/Enactus-Integrated-Platform/main/public/images/php-color.svg" height="20"> PHP 
      </p>
    </td>
    <td width="50%">
      <h4>🗄️ Database</h4>
      <p>
        <img src="https://raw.githubusercontent.com/Nkosi2000/Enactus-Integrated-Platform/main/public/images/postgresql-color.svg" height="20"> Supabase (PostgreSQL)<br>
        <img src="https://raw.githubusercontent.com/Nkosi2000/Enactus-Integrated-Platform/main/public/images/supabase-color.svg" height="20"> Row‑Level Security ready
      </p>
    </td>
  </tr>
  <tr>
    <td>
      <h4>🚀 Deployment</h4>
      <p>
        <img src="https://raw.githubusercontent.com/Nkosi2000/Enactus-Integrated-Platform/main/public/images/coolify-color.svg" height="20"> Coolify<br>
        <img src="https://raw.githubusercontent.com/Nkosi2000/Enactus-Integrated-Platform/main/public/images/hetzner-color.svg" height="20"> Hetzner<br>
        <img src="https://raw.githubusercontent.com/Nkosi2000/Enactus-Integrated-Platform/main/public/images/cloudflare-color.svg" height="20"> Cloudflare (Full SSL)
      </p>
    </td>
    <td>
      <h4>🔐 Authentication</h4>
      <p>Session‑based auth with 8 custom roles and middleware protection.</p>
    </td>
  </tr>
  <tr>
    <td>
      <h4>🎨 Frontend</h4>
      <p>Blade templates with
      <img src="https://raw.githubusercontent.com/Nkosi2000/Enactus-Integrated-Platform/main/public/images/sass-color.svg" height="15">
        Tailwind CSS (planned).</p>
    </td>
    <td>
      <h4>🧪 Testing</h4>
      <p>PHPUnit for unit and feature tests.</p>
    </td>
  </tr>
  <tr>
    <td>
      <h4>⚡ Cache & Queue</h4>
      <p>Database driver for development; Redis ready for production.</p>
    </td>
    <td>
      <h4>📦 Package Management</h4>
      <p>Composer for PHP dependencies.</p>
    </td>
  </tr>
</table>
---

### 