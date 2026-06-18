<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ง้อคนสวยของพี่</title>
    <!-- เรียกใช้ฟอนต์สุดน่ารักจาก Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@400;600&display=swap" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: 'Mali', cursive;
            /* ใส่รูปคู่เป็นพื้นหลังตรงนี้ เปลี่ยนชื่อไฟล์เป็นรูปของคุณ */
            background: url('photos/S__17121290.jpg') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            /* display: flex; เอาออกเพื่อให้เลื่อนได้ */
            /* justify-content: center; */
            /* align-items: center; */
            overflow: hidden; /* ซ่อนหัวใจที่ลอยออกนอกจอ */
            position: relative;
        }

        /* อนิเมชันหัวใจลอยเป็นพื้นหลัง */
        .heart {
            position: absolute;
            bottom: -20px;
            font-size: 24px;
            animation: float 4s ease-in infinite;
            opacity: 0.7;
            z-index: 1;
        }

        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); opacity: 1; }
            100% { transform: translateY(-100vh) rotate(360deg); opacity: 0; }
        }

        /* การ์ดแต่ละส่วน */
        .card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            width: 85%;
            max-width: 380px;
            max-height: 80vh; /* จำกัดความสูงของการ์ดให้อยู่แค่ 80% ของหน้าจอ */
            overflow-y: auto; /* ถ้าเนื้อหายาวกว่ากรอบ ให้เลื่อน(scroll)ดูในกรอบได้ */
            border-radius: 30px;
            padding: 30px 20px;
            margin: 0; /* เอา margin ออก เพราะ section จัดการแทน */
            text-align: center;
            box-shadow: 0 15px 35px rgba(255, 105, 135, 0.4);
            z-index: 10;
            animation: popIn 1s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            /* ซ่อนแถบ Scrollbar เพื่อให้ดูสวยงามเหมือนเดิม */
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        .card::-webkit-scrollbar {
            display: none;
        }

        @keyframes popIn {
            0% { transform: scale(0.5); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        h1, h2 {
            color: #e91e63; /* เปลี่ยนสีให้เข้มขึ้นเล็กน้อย */
            font-size: 28px;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(255, 182, 193, 0.5);
        }

        p {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        /* กรอบรูปสุดอลังการพร้อมอนิเมชันกระเพื่อม (Pulse) */
        .photo-frame {
            width: 160px;
            height: 160px;
            margin: 0 auto 20px;
            border-radius: 50%;
            padding: 6px;
            background: linear-gradient(45deg, #ff9a9e, #fecfef);
            box-shadow: 0 10px 20px rgba(255, 154, 158, 0.4);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(255, 154, 158, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(255, 154, 158, 0); }
            100% { box-shadow: 0 0 0 0 rgba(255, 154, 158, 0); }
        }

        .photo-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* ทำให้รูปไม่เบี้ยวและเต็มกรอบ */
            border-radius: 50%;
            border: 4px solid white;
        }

        /* --- ส่วนของลูกเล่นที่เพิ่มเข้ามา --- */

        /* 1. Timeline เส้นทางความรัก */
        .timeline {
            position: relative;
            padding: 20px 0;
        }
        .timeline::before { /* เส้นกลางของ Timeline */
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 3px;
            background: #fecfef;
            transform: translateX(-50%);
        }
        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }
        .timeline-item:nth-child(odd) { /* รายการฝั่งซ้าย */
            left: 0;
            text-align: right;
            padding-right: 25px;
        }
        .timeline-item:nth-child(even) { /* รายการฝั่งขวา */
            left: 50%;
            text-align: left;
            padding-left: 25px;
        }
        .timeline-item::after { /* จุดกลมๆ บนเส้น */
            content: '💕';
            position: absolute;
            top: 20px;
            right: -14px;
            width: 28px;
            height: 28px;
            background: white;
            border: 3px solid #ff9a9e;
            border-radius: 50%;
            z-index: 1;
            line-height: 24px;
            font-size: 14px;
        }
        .timeline-item:nth-child(even)::after {
            left: -14px;
        }
        .timeline-content {
            padding: 15px;
            background: #fff0f5;
            border-radius: 10px;
        }
        .timeline-content h3 { margin: 0 0 5px 0; color: #ff477e; }
        .timeline-content p { margin: 0; font-size: 14px; }
        .timeline-content img { width: 100%; height: 90px; object-fit: cover; border-radius: 10px; margin-top: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }

        /* 2. รายการสิ่งที่ชอบ */
        .reasons-list {
            list-style: none;
            padding: 0;
            text-align: left;
        }
        .reasons-list li {
            background: #fff0f5;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 10px;
            border-left: 5px solid #ff758c;
            transition: transform 0.2s;
        }
        .reasons-list li:hover {
            transform: scale(1.05);
        }

        /* 3. แกลเลอรี่รูปภาพ */
        .gallery {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }
        .gallery img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            border-radius: 15px;
            border: 3px solid white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .gallery img:hover {
            transform: scale(1.1) rotate(3deg);
            box-shadow: 0 8px 16px rgba(255, 105, 135, 0.4);
        }

        /* ส่วนสุดท้าย (ที่ง้อ) */
        .final-plea {
            position: relative; /* สำคัญมาก! สำหรับให้ปุ่มหนีอยู่ในกรอบ */
            min-height: 400px; /* กำหนดความสูงขั้นต่ำให้มีพื้นที่ให้ปุ่มวิ่ง */
        }

        .buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            margin-top: 10px;
        }

        button {
            font-family: 'Mali', cursive;
            font-size: 18px;
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
            width: 80%;
        }

        .btn-yes {
            background: linear-gradient(45deg, #ff477e, #ff758c);
            color: white;
            box-shadow: 0 5px 15px rgba(255, 71, 126, 0.4);
        }

        .btn-yes:hover, .btn-yes:active {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 20px rgba(255, 71, 126, 0.6);
        }

        .btn-no {
            background: #f1f2f6;
            color: #747d8c;
            /* position: relative; -> จะถูกเปลี่ยนเป็น absolute ด้วย JS */
        }
        
        /* ข้อความหลังจากกดยอมดีด้วย */
        .success-msg {
            display: none;
            color: #ff477e;
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
            animation: popIn 0.5s ease;
        }

        /* ปุ่มโทรออกสุดสวย */
        .call-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 25px;
            background: linear-gradient(45deg, #00c6ff, #0072ff);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-size: 22px;
            font-weight: bold;
            box-shadow: 0 5px 15px rgba(0, 114, 255, 0.4);
            animation: pulse-blue 2s infinite;
            transition: transform 0.3s;
        }
        .call-btn:hover {
            transform: scale(1.05);
        }
        @keyframes pulse-blue {
            0% { box-shadow: 0 0 0 0 rgba(0, 114, 255, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(0, 114, 255, 0); }
            100% { box-shadow: 0 0 0 0 rgba(0, 114, 255, 0); }
        }

        /* Section wrapper ที่ทำให้แต่ละส่วนเต็มจอ */
        .page-section {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            padding: 40px 0;
            box-sizing: border-box;
        }

        /* ปุ่มสำหรับเลื่อนไปส่วนถัดไป */
        .next-section-btn {
            background: none;
            border: none;
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 40px;
            color: rgba(255, 255, 255, 0.8);
            cursor: pointer;
            animation: bounce 2s infinite;
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0) translateX(-50%); }
            40% { transform: translateY(15px) translateX(-50%); }
            60% { transform: translateY(7px) translateX(-50%); }
        }
    </style>
</head>
<body>

    <!-- ภาชนะสำหรับใส่หัวใจลอยพื้นหลัง -->
    <div id="hearts-container"></div>

    <!-- การ์ดใบแรก: บทนำ -->
    <div class="page-section" id="section-1">
        <div class="card">
            <h1>คนสวยของพี่ 🥺</h1>
            <div class="photo-frame">
                <!-- 📸 เปลี่ยนชื่อไฟล์รูปภาพ หรือ URL ของรูปแฟนคุณตรง src นี้เลยครับ -->
                <img src="photos/LINE_ALBUM_🖤_260618_5.jpg" alt="คนสวยของพี่" id="girlfriend-photo">
            </div>
            <p>ที่รักค้าบบ คืนดีกันน้าา<strong>"เค้าอยากดีกับที่ร๊ากแง"</strong><br>พี่สำนึกแล้ว พี่จะไม่ทำแบบนั้น จะไม่ใจร้อนแบบนั้นแล้วค้าบบ<br>...กดลูกศรข้างล่างเพื่อดูต่อนะ...</p>
        </div>
        <button class="next-section-btn" onclick="scrollToSection('section-3')">👇</button>
    </div>

    <!-- ส่วนที่ 3: 10 อย่างที่รักในตัวเธอ -->
    <div class="page-section" id="section-3">
        <div class="card">
        <h2>✨ สิ่งที่พี่รักในตัวหนู ✨</h2>
        <ul class="reasons-list">
            <!-- แก้ไขข้อความได้ตามใจเลย -->
            <li>รอยยิ้มของที่ร๊ากกที่ทำให้โลกสดใส</li>
            <li>ความใจดีของที่ร๊ากกที่มีให้ทุกคน</li>
            <li>เวลาที่ที่ร๊ากกตั้งใจทำอะไรซักอย่าง</li>
            <li>เวลาที่ที่ร๊ากกบ่นอุบอิบ มันน่ารักมากนะ</li>
            <li>ทุกอย่างที่เป็นที่ร๊ากก...</li>
        </ul>
        </div>
        <button class="next-section-btn" onclick="scrollToSection('section-4')">👇</button>
    </div>

    <!-- ส่วนที่ 4: แกลเลอรี่รูปภาพ -->
    <div class="page-section" id="section-4">
        <div class="card">
        <h2>📸 แกลเลอรี่คนสวยของพี่ 📸</h2>
        <div class="gallery">
            <!-- ใส่รูปคู่กันเยอะๆ เลย! -->
            <img src="photos/S__17121286_0.jpg" alt="รูปคู่ 1">
            <img src="photos/LINE_ALBUM_🖤_260618_4.jpg" alt="รูปคู่ 2">
            <img src="photos/LINE_ALBUM_🖤_260618_2.jpg" alt="รูปคู่ 3">
            <img src="photos/S__17121288_0.jpg" alt="รูปคู่ 4">
        </div>
        </div>
        <button class="next-section-btn" onclick="scrollToSection('section-5')">👇</button>
    </div>

    <!-- ส่วนสุดท้าย: คำขอโทษและปุ่ม -->
    <div class="page-section" id="section-5">
        <div class="card final-plea">
        <h2>และสุดท้ายนี้... เรากลับมาเป็นเหมือนเดิมได้ไหมค่าา?</h2>
        <p>พี่สัญญาว่าจะไม่ทำให้ที่ร๊ากกต้องเสียใจแบบนี้อีก จะดูแลที่ร๊ากกให้ดีกว่าเดิม<br>ให้โอกาสพี่แก้ตัวนะ... กลับมาคบกันเหมือนเดิมนะค้าบ?</p>
        <div class="buttons" id="btn-group">
            <button class="btn-yes" onclick="forgiveMe()">ยอมคืนดีด้วยก็ได้ จุ๊บๆ 😘</button>
            <button class="btn-no" id="btn-no" onmouseover="moveButton()">ยังไม่หายโกรธ หึ! 😤</button>
        </div>
        <div class="success-msg" id="success-msg">
            เย้! ขอบคุณนะค่าคนสวย<br>พี่รักที่ร๊ากกที่สุดในโลกเลยยยย 💖🎉
            <p style="margin-top: 20px; color: #555; font-size: 16px;">ถ้าที่ร๊ากกพร้อมให้โอกาสพี่ โทรหาพี่เลยนะ พี่รอรับสายอยู่... เปิดบล็อกเค้าด้วยน้าา</p>
            <a href="tel:0646375396" class="call-btn">📞 0646375396</a>
        </div>
        </div>
    </div>

    <script>
        // ฟังก์ชันสำหรับเลื่อนไปยัง section ที่ต้องการ
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView();
        }

        // ฟังก์ชันสร้างหัวใจลอยฟรุ้งฟริ้งเป็นพื้นหลัง
        function createHearts() {
            const container = document.getElementById('hearts-container');
            const emojis = ['💖', '💕', '🌸', '✨', '🥺'];
            
            setInterval(() => {
                const heart = document.createElement('div');
                heart.classList.add('heart');
                heart.innerText = emojis[Math.floor(Math.random() * emojis.length)];
                
                // สุ่มตำแหน่งเริ่มต้นของหัวใจในแนวนอน
                heart.style.left = Math.random() * 100 + 'vw';
                // สุ่มความเร็วในการลอย
                heart.style.animationDuration = Math.random() * 2 + 3 + 's';
                
                container.appendChild(heart);
                
                // ลบหัวใจทิ้งเมื่อมันลอยพ้นจอไปแล้ว (กันเครื่องกระตุก)
                setTimeout(() => {
                    heart.remove();
                }, 5000);
            }, 400); // ออกมาทุกๆ 0.4 วินาที
        }

        // ฟังก์ชันทำให้ปุ่ม 'ไม่ให้อภัย' วิ่งหนีเวลานิ้วไปโดนหรือเมาส์ไปชี้
        function moveButton() {
            const btn = document.getElementById('btn-no');
            const container = document.querySelector('.final-plea'); //หากรอบที่ต้องการให้ปุ่มอยู่

            // ทำให้ปุ่มสามารถเคลื่อนที่ได้อย่างอิสระในกรอบ
            btn.style.position = 'absolute';

            // คำนวณพื้นที่ที่ปุ่มสามารถวิ่งได้
            const containerWidth = container.clientWidth;
            const containerHeight = container.clientHeight;
            const btnWidth = btn.offsetWidth;
            const btnHeight = btn.offsetHeight;

            // สุ่มตำแหน่งใหม่
            const randomX = Math.floor(Math.random() * (containerWidth - btnWidth));
            const randomY = Math.floor(Math.random() * (containerHeight - btnHeight));

            btn.style.left = randomX + 'px';
            btn.style.top = randomY + 'px';
        }

        // ฟังก์ชันเมื่อกดยอมดีด้วย
        function forgiveMe() {
            document.getElementById('btn-group').style.display = 'none';
            document.getElementById('success-msg').style.display = 'block';
            document.querySelector('h1').innerText = "กลับมาคบกันแล้วนะ 🥰";
            document.querySelector('.final-plea p:first-of-type').innerText = "ดีใจที่สุดเลยที่ที่ร๊ากกยอมให้โอกาส! พี่จะดูแลที่ร๊ากกให้ดีที่สุดเลยยยย!";
            
            // เอฟเฟกต์จุดพลุหัวใจรัวๆ ดีใจจัด!
            for(let i=0; i<30; i++) {
                setTimeout(() => {
                    const heart = document.createElement('div');
                    heart.classList.add('heart');
                    heart.innerText = '🎉';
                    heart.style.fontSize = '35px';
                    heart.style.animationDuration = '2s'; // ลอยเร็วขึ้น
                    document.getElementById('hearts-container').appendChild(heart);
                }, i * 50);
            }
        }

        // เริ่มแสดงหัวใจทันทีที่เปิดเว็บ
        createHearts();
    </script>
</body>
</html>