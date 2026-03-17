<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>World Nuad Thai Massage Championship of Australia 2026 - 1st</title>
  <meta name="description" content="World Nuad Thai Massage Championship of Australia 2026 - 1st. Competition, Workshop, Official Shirt, Gala Dinner, Sponsorship. Manual payment via email. Currency: AUD$." />

  <!-- Google Fonts: Poppins (headings) + Inter (body) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Tailwind Theme (CDN config) -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            heading: ["Poppins", "Inter", "ui-sans-serif", "system-ui"],
            body: ["Inter", "ui-sans-serif", "system-ui"],
          },
          colors: {
            brand: {
              bg: "#FAF7F0",      // Ivory / warm white
              surface: "#FFFFFF", // Card surface
              border: "#E7E1D7",
              ink: "#1B1B1B",
              muted: "#5F5A52",
              gold: "#C8A24A",
              maroon: "#7A1E2C",
              teal: "#1F8A70",
            }
          },
          boxShadow: {
            soft: "0 10px 25px rgba(0,0,0,0.06)",
          },
          borderRadius: {
            xl: "1rem",
            "2xl": "1.25rem"
          }
        }
      }
    }
  </script>

  <style>
    html { scroll-behavior: smooth; }

    /* พื้นหลังซ้ำ X/Y + โปร่งแสง 20% (เห็นรูป 20%) */
    .bg-thai-pattern {
      background-color: #FAF7F0;

      /* ชั้นบนเป็นสีพื้นโปร่ง 80% -> ทำให้รูปข้างล่างเห็น ~20% */
      background-image:
        linear-gradient(
          rgba(250, 247, 240, 0.7),
          rgba(250, 247, 240, 0.7)
        ),
        url("/images/bg.webp");

      /* ให้ซ้ำทั้ง 2 ชั้น */
      background-repeat: repeat, repeat;

      /* ปรับขนาดลาย (ชั้น gradient ปล่อย auto, ชั้นรูปกำหนดได้) */
      background-size: auto, 100px 100px;

      /* ตำแหน่งเริ่มต้น */
      background-position: 0 0, 0 0;
    }
  </style>
</head>
