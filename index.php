<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OryvexHub - Complete Fitness & Wellness Center</title>
    <meta name="description" content="OryvexHub is your ultimate fitness destination offering professional training, group classes, wellness programs, and modern equipment. Transform your health journey with our expert trainers and comprehensive fitness solutions.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .nav-container-x7k9 {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-m4p2 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-q8w5 {
            font-size: 2rem;
            font-weight: bold;
            color: #e74c3c;
            text-decoration: none;
        }

        .nav-menu-r3t7 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-b9n1 {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
            cursor: pointer;
        }

        .nav-link-b9n1:hover {
            color: #e74c3c;
        }

        .hero-section-z5v8 {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.pexels.com/photos/1552242/pexels-photo-1552242.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero-content-a6d3 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-k2f9 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-l8h4 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-p7j6 {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-p7j6:hover {
            background: #c0392b;
        }

        .section-wrapper-u9i2 {
            padding: 80px 0;
        }

        .container-max-w3e7 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title-y4r8 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .about-grid-n5t1 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            margin-bottom: 4rem;
        }

        .about-text-s7k3 {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image-d2m9 {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .about-image-d2m9 img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .services-grid-f6h8 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .service-card-x1v4 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s;
        }

        .service-card-x1v4:hover {
            transform: translateY(-5px);
        }

        .service-icon-q9w2 {
            font-size: 3rem;
            color: #e74c3c;
            margin-bottom: 1rem;
        }

        .service-title-c4b7 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .programs-section-h8j5 {
            background: #f8f9fa;
        }

        .program-cards-t3n6 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .program-card-e9r1 {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .program-card-e9r1:hover {
            transform: scale(1.05);
        }

        .program-image-a5d8 {
            height: 200px;
            overflow: hidden;
        }

        .program-image-a5d8 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .program-content-m7k2 {
            padding: 1.5rem;
        }

        .program-title-b3f9 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .trainers-section-l6p4 {
            background: linear-gradient(135deg, #34495e, #2c3e50);
            color: white;
        }

        .trainers-grid-w8n7 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .trainer-card-v2j8 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .trainer-image-k9s3 {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 1rem;
            overflow: hidden;
        }

        .trainer-image-k9s3 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .history-section-g4t6 {
            background: #ecf0f1;
        }

        .timeline-container-r7m5 {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline-item-n8q1 {
            background: white;
            padding: 2rem;
            margin: 2rem 0;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
        }

        .timeline-year-p5w9 {
            background: #e74c3c;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .reviews-section-z3x7 {
            background: #2c3e50;
            color: white;
        }

        .reviews-grid-c6v2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .review-card-h1k8 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .review-stars-f4j3 {
            color: #f39c12;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .review-text-s9d7 {
            font-style: italic;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .review-author-t2n4 {
            font-weight: bold;
            color: #e74c3c;
        }

        .facilities-section-u7i5 {
            background: white;
        }

        .facilities-grid-o3w8 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .facility-item-q6r1 {
            text-align: center;
            padding: 1.5rem;
        }

        .facility-icon-m9t3 {
            font-size: 3rem;
            color: #e74c3c;
            margin-bottom: 1rem;
        }

        .footer-section-x4b6 {
            background: #1a252f;
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-grid-y8k2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-column-l5n9 h3 {
            color: #e74c3c;
            margin-bottom: 1rem;
        }

        .footer-link-p7w4 {
            color: #bdc3c7;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s;
        }

        .footer-link-p7w4:hover {
            color: #e74c3c;
        }

        .phone-link-d3s8 {
            color: #e74c3c;
            text-decoration: none;
            font-weight: bold;
        }

        .footer-bottom-a1v7 {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #34495e;
            color: #95a5a6;
        }

        .modal-overlay-j9f2 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-k6h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-e8t5 {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #e74c3c;
        }

        .wellness-section-r4m7 {
            background: linear-gradient(45deg, #f39c12, #e67e22);
            color: white;
        }

        .wellness-grid-n2k9 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .wellness-card-v6p3 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            text-align: center;
        }

        .nutrition-section-h5w1 {
            background: #27ae60;
            color: white;
        }

        .nutrition-content-s3j4 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .nutrition-image-t8r6 {
            border-radius: 10px;
            overflow: hidden;
        }

        .nutrition-image-t8r6 img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .nav-menu-r3t7 {
                display: none;
            }
            
            .hero-title-k2f9 {
                font-size: 2.5rem;
            }
            
            .about-grid-n5t1,
            .nutrition-content-s3j4 {
                grid-template-columns: 1fr;
            }
            
            .section-title-y4r8 {
                font-size: 2rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%25%33%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%25%37%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%34%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%34%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%34%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

    <nav class="nav-container-x7k9">
        <div class="nav-wrapper-m4p2">
            <a href="#home" class="logo-brand-q8w5">OryvexHub</a>
            <ul class="nav-menu-r3t7">
                <li><a href="#home" class="nav-link-b9n1">Home</a></li>
                <li><a href="#about" class="nav-link-b9n1">About</a></li>
                <li><a href="#services" class="nav-link-b9n1">Services</a></li>
                <li><a href="#programs" class="nav-link-b9n1">Programs</a></li>
                <li><a href="#trainers" class="nav-link-b9n1">Trainers</a></li>
                <li><a href="#wellness" class="nav-link-b9n1">Wellness</a></li>
                <li><a href="#nutrition" class="nav-link-b9n1">Nutrition</a></li>
                <li><a href="#history" class="nav-link-b9n1">History</a></li>
                <li><a href="#facilities" class="nav-link-b9n1">Facilities</a></li>
                <li><a href="#reviews" class="nav-link-b9n1">Reviews</a></li>
                <li><a href="#" class="nav-link-b9n1" onclick="openModal('privacy')">Privacy</a></li>
                <li><a href="#" class="nav-link-b9n1" onclick="openModal('terms')">Terms</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero-section-z5v8">
        <div class="hero-content-a6d3">
            <h1 class="hero-title-k2f9">Transform Your Life at OryvexHub</h1>
            <p class="hero-subtitle-l8h4">Your complete fitness and wellness destination with expert trainers, modern equipment, and comprehensive programs designed to help you achieve your health goals.</p>
            <a href="#about" class="cta-button-p7j6">Start Your Journey</a>
        </div>
    </section>

    <section id="about" class="section-wrapper-u9i2">
        <div class="container-max-w3e7">
            <h2 class="section-title-y4r8">About OryvexHub</h2>
            <div class="about-grid-n5t1">
                <div class="about-text-s7k3">
                    <p>OryvexHub stands as a beacon of health and fitness excellence in our community. We believe that fitness is not just about physical transformation, but about creating a lifestyle that promotes overall well-being and personal growth.</p>
                    <p>Our state-of-the-art facility combines cutting-edge equipment with expert guidance to provide you with everything you need to succeed. Whether you're a beginner taking your first steps toward fitness or an experienced athlete looking to push your limits, we have the resources and expertise to support your journey.</p>
                    <p>At OryvexHub, we foster a supportive community where members encourage each other to reach new heights. Our comprehensive approach includes fitness training, nutritional guidance, wellness programs, and ongoing support to ensure your success.</p>
                </div>
                <div class="about-image-d2m9">
                    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg" alt="Modern fitness facility">
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="section-wrapper-u9i2" style="background: #f8f9fa;">
        <div class="container-max-w3e7">
            <h2 class="section-title-y4r8">Our Services</h2>
            <div class="services-grid-f6h8">
                <div class="service-card-x1v4">
                    <div class="service-icon-q9w2">🏋️</div>
                    <h3 class="service-title-c4b7">Personal Training</h3>
                    <p>One-on-one sessions with certified trainers who create customized workout plans tailored to your specific goals, fitness level, and preferences.</p>
                </div>
                <div class="service-card-x1v4">
                    <div class="service-icon-q9w2">👥</div>
                    <h3 class="service-title-c4b7">Group Classes</h3>
                    <p>Dynamic group fitness classes including HIIT, yoga, spinning, Zumba, and strength training led by experienced instructors.</p>
                </div>
                <div class="service-card-x1v4">
                    <div class="service-icon-q9w2">🎯</div>
                    <h3 class="service-title-c4b7">Specialized Programs</h3>
                    <p>Targeted programs for weight loss, muscle building, athletic performance, rehabilitation, and senior fitness.</p>
                </div>
                <div class="service-card-x1v4">
                    <div class="service-icon-q9w2">📊</div>
                    <h3 class="service-title-c4b7">Fitness Assessment</h3>
                    <p>Comprehensive fitness evaluations including body composition analysis, strength testing, and cardiovascular assessment.</p>
                </div>
                <div class="service-card-x1v4">
                    <div class="service-icon-q9w2">🧘</div>
                    <h3 class="service-title-c4b7">Mind-Body Classes</h3>
                    <p>Holistic wellness classes including meditation, tai chi, pilates, and stress management workshops.</p>
                </div>
                <div class="service-card-x1v4">
                    <div class="service-icon-q9w2">⚡</div>
                    <h3 class="service-title-c4b7">Recovery Services</h3>
                    <p>Professional massage therapy, stretching sessions, and recovery protocols to optimize your training results.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="programs" class="section-wrapper-u9i2 programs-section-h8j5">
        <div class="container-max-w3e7">
            <h2 class="section-title-y4r8">Fitness Programs</h2>
            <div class="program-cards-t3n6">
                <div class="program-card-e9r1">
                    <div class="program-image-a5d8">
                        <img src="https://images.pexels.com/photos/1431282/pexels-photo-1431282.jpeg" alt="Strength training program">
                    </div>
                    <div class="program-content-m7k2">
                        <h3 class="program-title-b3f9">Strength Building</h3>
                        <p>Comprehensive strength training program focusing on progressive overload, proper form, and muscle development across all major muscle groups.</p>
                    </div>
                </div>
                <div class="program-card-e9r1">
                    <div class="program-image-a5d8">
                        <img src="https://images.pexels.com/photos/1552106/pexels-photo-1552106.jpeg" alt="Cardio fitness program">
                    </div>
                    <div class="program-content-m7k2">
                        <h3 class="program-title-b3f9">Cardio Conditioning</h3>
                        <p>High-energy cardiovascular programs designed to improve heart health, endurance, and burn calories effectively.</p>
                    </div>
                </div>
                <div class="program-card-e9r1">
                    <div class="program-image-a5d8">
                        <img src="https://images.pexels.com/photos/1153369/pexels-photo-1153369.jpeg" alt="Flexibility and mobility">
                    </div>
                    <div class="program-content-m7k2">
                        <h3 class="program-title-b3f9">Flexibility & Mobility</h3>
                        <p>Specialized programs focusing on improving range of motion, flexibility, and joint mobility for better movement quality.</p>
                    </div>
                </div>
                <div class="program-card-e9r1">
                    <div class="program-image-a5d8">
                        <img src="https://images.pexels.com/photos/1552252/pexels-photo-1552252.jpeg" alt="Functional fitness">
                    </div>
                    <div class="program-content-m7k2">
                        <h3 class="program-title-b3f9">Functional Training</h3>
                        <p>Real-world movement patterns that improve daily activities and enhance overall functional strength and coordination.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="trainers" class="section-wrapper-u9i2 trainers-section-l6p4">
        <div class="container-max-w3e7">
            <h2 class="section-title-y4r8">Expert Trainers</h2>
            <div class="trainers-grid-w8n7">
                <div class="trainer-card-v2j8">
                    <div class="trainer-image-k9s3">
                        <img src="https://images.pexels.com/photos/1552242/pexels-photo-1552242.jpeg" alt="Sarah Mitchell">
                    </div>
                    <h3>Sarah Mitchell</h3>
                    <p><strong>Head Trainer & Fitness Director</strong></p>
                    <p>15+ years experience in strength training and athletic performance. Certified in multiple fitness disciplines with a passion for helping clients achieve breakthrough results.</p>
                </div>
                <div class="trainer-card-v2j8">
                    <div class="trainer-image-k9s3">
                        <img src="https://images.pexels.com/photos/1431282/pexels-photo-1431282.jpeg" alt="Marcus Rodriguez">
                    </div>
                    <h3>Marcus Rodriguez</h3>
                    <p><strong>Strength & Conditioning Specialist</strong></p>
                    <p>Former professional athlete with expertise in sports performance, injury prevention, and functional movement patterns.</p>
                </div>
                <div class="trainer-card-v2j8">
                    <div class="trainer-image-k9s3">
                        <img src="https://images.pexels.com/photos/1153369/pexels-photo-1153369.jpeg" alt="Emma Thompson">
                    </div>
                    <h3>Emma Thompson</h3>
                    <p><strong>Yoga & Wellness Instructor</strong></p>
                    <p>Certified yoga instructor and wellness coach specializing in mind-body connection, stress reduction, and holistic health approaches.</p>
                </div>
                <div class="trainer-card-v2j8">
                    <div class="trainer-image-k9s3">
                        <img src="https://images.pexels.com/photos/1552252/pexels-photo-1552252.jpeg" alt="David Chen">
                    </div>
                    <h3>David Chen</h3>
                    <p><strong>Nutrition & Lifestyle Coach</strong></p>
                    <p>Registered dietitian and lifestyle coach helping clients develop sustainable nutrition habits and healthy lifestyle practices.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="wellness" class="section-wrapper-u9i2 wellness-section-r4m7">
        <div class="container-max-w3e7">
            <h2 class="section-title-y4r8">Wellness Programs</h2>
            <div class="wellness-grid-n2k9">
                <div class="wellness-card-v6p3">
                    <h3>Stress Management</h3>
                    <p>Learn effective techniques to manage stress through breathing exercises, meditation, and lifestyle modifications that promote mental well-being.</p>
                </div>
                <div class="wellness-card-v6p3">
                    <h3>Sleep Optimization</h3>
                    <p>Comprehensive program addressing sleep hygiene, relaxation techniques, and lifestyle factors that contribute to quality rest and recovery.</p>
                </div>
                <div class="wellness-card-v6p3">
                    <h3>Mental Health Support</h3>
                    <p>Supportive environment and resources for mental health awareness, including workshops on anxiety management and emotional wellness.</p>
                </div>
                <div class="wellness-card-v6p3">
                    <h3>Lifestyle Coaching</h3>
                    <p>Personalized guidance on creating sustainable healthy habits, time management, and work-life balance strategies.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="nutrition" class="section-wrapper-u9i2 nutrition-section-h5w1">
        <div class="container-max-w3e7">
            <h2 class="section-title-y4r8">Nutrition Guidance</h2>
            <div class="nutrition-content-s3j4">
                <div>
                    <h3>Personalized Nutrition Plans</h3>
                    <p>Our certified nutritionists work with you to develop customized meal plans that align with your fitness goals, dietary preferences, and lifestyle requirements.</p>
                    
                    <h3>Educational Workshops</h3>
                    <p>Regular workshops covering topics like meal prep, healthy cooking techniques, supplement guidance, and understanding macronutrients.</p>
                    
                    <h3>Ongoing Support</h3>
                    <p>Continuous monitoring and adjustments to your nutrition plan based on your progress, ensuring optimal results and sustainable habits.</p>
                </div>
                <div class="nutrition-image-t8r6">
                    <img src="https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg" alt="Healthy nutrition">
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="section-wrapper-u9i2 history-section-g4t6">
        <div class="container-max-w3e7">
            <h2 class="section-title-y4r8">Our Journey</h2>
            <div class="timeline-container-r7m5">
                <div class="timeline-item-n8q1">
                    <div class="timeline-year-p5w9">2018</div>
                    <h3>The Beginning</h3>
                    <p>OryvexHub was founded with a vision to create a comprehensive fitness and wellness center that would serve our community's diverse health needs. We started with a small team of passionate trainers and basic equipment.</p>
                </div>
                <div class="timeline-item-n8q1">
                    <div class="timeline-year-p5w9">2019</div>
                    <h3>Expansion & Growth</h3>
                    <p>Due to overwhelming community support, we expanded our facility by 50% and added specialized equipment for strength training, cardio, and functional fitness. We also introduced our first group fitness classes.</p>
                </div>
                <div class="timeline-item-n8q1">
                    <div class="timeline-year-p5w9">2020</div>
                    <h3>Wellness Integration</h3>
                    <p>Recognizing the importance of holistic health, we integrated wellness programs including nutrition counseling, stress management workshops, and mental health support services.</p>
                </div>
                <div class="timeline-item-n8q1">
                    <div class="timeline-year-p5w9">2021</div>
                    <h3>Technology Enhancement</h3>
                    <p>We invested in cutting-edge fitness technology, including advanced body composition analyzers, heart rate monitoring systems, and a comprehensive member app for tracking progress.</p>
                </div>
                <div class="timeline-item-n8q1">
                    <div class="timeline-year-p5w9">2022</div>
                    <h3>Community Impact</h3>
                    <p>Launched community outreach programs, partnered with local schools for youth fitness initiatives, and established scholarship programs for underprivileged community members.</p>
                </div>
                <div class="timeline-item-n8q1">
                    <div class="timeline-year-p5w9">2023</div>
                    <h3>Excellence Recognition</h3>
                    <p>Received multiple awards for fitness excellence and community service. Expanded our team to include specialized therapists and opened our recovery center with massage therapy and rehabilitation services.</p>
</div>
<div class="timeline-item-n8q1">
<div class="timeline-year-p5w9">2024</div>
<h3>Future Forward</h3>
<p>Today, OryvexHub continues to evolve with innovative programs, advanced equipment, and a commitment to helping every member achieve their personal best in a supportive, inclusive environment.</p>
</div>
</div>
</div>
</section>
<section id="facilities" class="section-wrapper-u9i2 facilities-section-u7i5">
    <div class="container-max-w3e7">
        <h2 class="section-title-y4r8">World-Class Facilities</h2>
        <div class="facilities-grid-o3w8">
            <div class="facility-item-q6r1">
                <div class="facility-icon-m9t3">🏋️‍♂️</div>
                <h3>Strength Training Zone</h3>
                <p>Complete free weight area with Olympic platforms, power racks, and specialized strength equipment for all experience levels.</p>
            </div>
            <div class="facility-item-q6r1">
                <div class="facility-icon-m9t3">🏃‍♀️</div>
                <h3>Cardio Theater</h3>
                <p>State-of-the-art cardio equipment with individual entertainment systems and panoramic views to keep you motivated.</p>
            </div>
            <div class="facility-item-q6r1">
                <div class="facility-icon-m9t3">🧘‍♀️</div>
                <h3>Mind-Body Studio</h3>
                <p>Peaceful, dedicated space for yoga, pilates, meditation, and stretching with natural lighting and calming ambiance.</p>
            </div>
            <div class="facility-item-q6r1">
                <div class="facility-icon-m9t3">🏊‍♂️</div>
                <h3>Aquatic Center</h3>
                <p>Indoor pool facility for lap swimming, water aerobics, and aquatic therapy programs suitable for all ages.</p>
            </div>
            <div class="facility-item-q6r1">
                <div class="facility-icon-m9t3">🎯</div>
                <h3>Functional Training Area</h3>
                <p>Open space designed for functional movements, agility training, and small group sessions with versatile equipment.</p>
            </div>
            <div class="facility-item-q6r1">
                <div class="facility-icon-m9t3">🛁</div>
                <h3>Recovery Lounge</h3>
                <p>Relaxation area with massage chairs, stretching zones, and quiet spaces for post-workout recovery and meditation.</p>
            </div>
            <div class="facility-item-q6r1">
                <div class="facility-icon-m9t3">🥗</div>
                <h3>Nutrition Bar</h3>
                <p>Healthy refreshment station offering protein smoothies, fresh juices, and nutritious snacks to fuel your workouts.</p>
            </div>
            <div class="facility-item-q6r1">
                <div class="facility-icon-m9t3">👶</div>
                <h3>Childcare Center</h3>
                <p>Safe, supervised childcare facility allowing parents to focus on their fitness while children enjoy age-appropriate activities.</p>
            </div>
        </div>
    </div>
</section>

<section id="reviews" class="section-wrapper-u9i2 reviews-section-z3x7">
    <div class="container-max-w3e7">
        <h2 class="section-title-y4r8">Member Success Stories</h2>
        <div class="reviews-grid-c6v2">
            <div class="review-card-h1k8">
                <div class="review-stars-f4j3">★★★★★</div>
                <p class="review-text-s9d7">"OryvexHub completely transformed my approach to fitness. The trainers are incredibly knowledgeable and supportive. I've achieved goals I never thought possible, and the community here feels like family."</p>
                <p class="review-author-t2n4">- Jennifer Walsh, Member since 2019</p>
            </div>
            <div class="review-card-h1k8">
                <div class="review-stars-f4j3">★★★★★</div>
                <p class="review-text-s9d7">"The variety of programs and classes keeps me engaged and motivated. From strength training to yoga, everything is top-notch. The facilities are always clean and well-maintained."</p>
                <p class="review-author-t2n4">- Michael Torres, Member since 2020</p>
            </div>
            <div class="review-card-h1k8">
                <div class="review-stars-f4j3">★★★★★</div>
                <p class="review-text-s9d7">"As a busy parent, the childcare service is a game-changer. I can focus on my workout knowing my kids are safe and happy. The staff goes above and beyond to help everyone succeed."</p>
                <p class="review-author-t2n4">- Lisa Chen, Member since 2021</p>
            </div>
            <div class="review-card-h1k8">
                <div class="review-stars-f4j3">★★★★★</div>
                <p class="review-text-s9d7">"The nutrition guidance has been life-changing. Combined with the excellent training programs, I've not only lost weight but gained confidence and energy I haven't felt in years."</p>
                <p class="review-author-t2n4">- Robert Kim, Member since 2022</p>
            </div>
            <div class="review-card-h1k8">
                <div class="review-stars-f4j3">★★★★★</div>
                <p class="review-text-s9d7">"The wellness programs here address more than just physical fitness. The stress management workshops and mental health support have helped me create a balanced, healthy lifestyle."</p>
                <p class="review-author-t2n4">- Amanda Rodriguez, Member since 2021</p>
            </div>
            <div class="review-card-h1k8">
                <div class="review-stars-f4j3">★★★★★</div>
                <p class="review-text-s9d7">"I've been to many gyms, but OryvexHub stands out for its personalized approach. Every trainer knows my name and goals. The equipment is excellent and there's never overcrowding."</p>
                <p class="review-author-t2n4">- Daniel Foster, Member since 2023</p>
            </div>
        </div>
    </div>
</section>

<footer class="footer-section-x4b6">
    <div class="container-max-w3e7">
        <div class="footer-grid-y8k2">
            <div class="footer-column-l5n9">
                <h3>Contact Information</h3>
                <p>📍 2847 Wellness Boulevard<br>Riverside Heights, CA 92507</p>
                <p>📧 info@oryvexhub.com</p>
                <p>📞 <a href="tel:+19514782639" class="phone-link-d3s8">(951) 478-2639</a></p>
                <p>🕒 Mon-Fri: 5:00 AM - 11:00 PM<br>Weekends: 6:00 AM - 10:00 PM</p>
            </div>
            <div class="footer-column-l5n9">
                <h3>Quick Links</h3>
                <a href="#about" class="footer-link-p7w4">About Us</a>
                <a href="#services" class="footer-link-p7w4">Services</a>
                <a href="#programs" class="footer-link-p7w4">Programs</a>
                <a href="#trainers" class="footer-link-p7w4">Our Trainers</a>
                <a href="#facilities" class="footer-link-p7w4">Facilities</a>
            </div>
            <div class="footer-column-l5n9">
                <h3>Wellness Programs</h3>
                <a href="#wellness" class="footer-link-p7w4">Stress Management</a>
                <a href="#wellness" class="footer-link-p7w4">Sleep Optimization</a>
                <a href="#nutrition" class="footer-link-p7w4">Nutrition Guidance</a>
                <a href="#wellness" class="footer-link-p7w4">Mental Health Support</a>
                <a href="#wellness" class="footer-link-p7w4">Lifestyle Coaching</a>
            </div>
            <div class="footer-column-l5n9">
                <h3>Member Resources</h3>
                <a href="#reviews" class="footer-link-p7w4">Success Stories</a>
                <a href="#history" class="footer-link-p7w4">Our Journey</a>
                <a href="#" class="footer-link-p7w4" onclick="openModal('privacy')">Privacy Policy</a>
                <a href="#" class="footer-link-p7w4" onclick="openModal('terms')">Terms of Service</a>
                <p style="margin-top: 1rem;">Follow us on social media for fitness tips and updates!</p>
            </div>
        </div>
        <div class="footer-bottom-a1v7">
            <p>© 2024 OryvexHub Fitness & Wellness Center. All rights reserved. | Empowering healthier communities through comprehensive fitness solutions.</p>
        </div>
    </div>
</footer>

<!-- Privacy Policy Modal -->
<div id="privacyModal" class="modal-overlay-j9f2">
    <div class="modal-content-k6h1">
        <span class="modal-close-e8t5" onclick="closeModal('privacy')">×</span>
        <h2>Privacy Policy</h2>
        <p><strong>Effective Date:</strong> January 1, 2024</p>
        
        <h3>Information We Collect</h3>
        <p>OryvexHub collects information you provide directly to us, such as when you create an account, sign up for classes, or contact us for support. This may include your name, email address, phone number, fitness goals, and health information relevant to your training.</p>
        
        <h3>How We Use Your Information</h3>
        <p>We use the information we collect to provide, maintain, and improve our services, communicate with you about your membership and our programs, process transactions, and ensure the safety and security of our facility.</p>
        
        <h3>Information Sharing</h3>
        <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted service providers who assist us in operating our facility and serving our members.</p>
        
        <h3>Data Security</h3>
        <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
        
        <h3>Your Rights</h3>
        <p>You have the right to access, update, or delete your personal information. You may also opt out of certain communications from us. To exercise these rights, please contact us using the information provided below.</p>
        
        <h3>Contact Us</h3>
        <p>If you have any questions about this Privacy Policy, please contact us at info@oryvexhub.com or (951) 478-2639.</p>
    </div>
</div>

<!-- Terms of Service Modal -->
<div id="termsModal" class="modal-overlay-j9f2">
    <div class="modal-content-k6h1">
        <span class="modal-close-e8t5" onclick="closeModal('terms')">×</span>
        <h2>Terms of Service</h2>
        <p><strong>Effective Date:</strong> January 1, 2024</p>
        
        <h3>Acceptance of Terms</h3>
        <p>By using OryvexHub's facilities and services, you agree to be bound by these Terms of Service. If you do not agree to these terms, please do not use our services.</p>
        
        <h3>Membership and Access</h3>
        <p>Membership grants you access to our facilities during operating hours, subject to these terms and our facility rules. Memberships are non-transferable and must be used by the registered member only.</p>
        
        <h3>Health and Safety</h3>
        <p>You acknowledge that physical exercise involves inherent risks. You agree to use equipment properly, follow safety guidelines, and inform staff of any health conditions that may affect your ability to exercise safely.</p>
        
        <h3>Facility Rules</h3>
        <p>Members must follow all posted facility rules, treat equipment and facilities with respect, and maintain appropriate conduct that ensures a positive environment for all members.</p>
        
        <h3>Cancellation Policy</h3>
        <p>Membership cancellations must be submitted in writing with appropriate notice as specified in your membership agreement. Certain membership types may have specific cancellation requirements.</p>
        
        <h3>Limitation of Liability</h3>
        <p>OryvexHub's liability is limited to the extent permitted by law. We are not responsible for injuries, accidents, or losses that may occur while using our facilities or services.</p>
        
        <h3>Modifications</h3>
        <p>We reserve the right to modify these terms at any time. Changes will be effective immediately upon posting. Continued use of our services constitutes acceptance of modified terms.</p>
        
        <h3>Contact Information</h3>
        <p>For questions regarding these terms, contact us at info@oryvexhub.com or (951) 478-2639.</p>
    </div>
</div>

<script>
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Modal functions
    function openModal(type) {
        const modal = document.getElementById(type + 'Modal');
        if (modal) {
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }
    }

    function closeModal(type) {
        const modal = document.getElementById(type + 'Modal');
        if (modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    }

    // Close modal when clicking outside
    window.addEventListener('click', function(e) {
        if (e.target.classList.contains('modal-overlay-j9f2')) {
            e.target.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });

    // Add scroll effect to navigation
    window.addEventListener('scroll', function() {
        const nav = document.querySelector('.nav-container-x7k9');
        if (window.scrollY > 100) {
            nav.style.background = 'linear-gradient(135deg, #1a252f, #2c3e50)';
        } else {
            nav.style.background = 'linear-gradient(135deg, #2c3e50, #34495e)';
        }
    });

    // Animate elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.service-card-x1v4, .program-card-e9r1, .trainer-card-v2j8, .review-card-h1k8').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });

    // Add loading animation
    window.addEventListener('load', function() {
        document.body.style.opacity = '1';
    });

    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.5s ease';
</script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>



