<!DOCTYPE html>
<html>
<head>
    <title>CARMED-BRIEF - Medical Billing Solutions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-container {
            text-align: center;
            background: white;
            border-radius: 20px;
            padding: 60px 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 90%;
        }

        .logo-text {
            font-size: 3.5rem;
            font-weight: 700;
            color: #2c5aa0;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo-text .car {
            color: #e74c3c;
        }

        .logo-text .med {
            color: #27ae60;
        }

        .logo-text .brief {
            color: #2c5aa0;
        }

        .tagline {
            font-size: 1.2rem;
            color: #7f8c8d;
            margin-bottom: 30px;
            font-weight: 300;
        }

        .medical-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            fill: #e74c3c;
            filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.1));
        }

        .features {
            display: flex;
            justify-content: space-around;
            margin-top: 40px;
            flex-wrap: wrap;
        }

        .feature {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            flex: 1;
            min-width: 150px;
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
            fill: #2c5aa0;
        }

        .feature-text {
            font-size: 0.9rem;
            color: #34495e;
            font-weight: 500;
        }

        @media (max-width: 768px) {
            .logo-text {
                font-size: 2.5rem;
            }
            
            .features {
                flex-direction: column;
            }
            
            .logo-container {
                padding: 40px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="logo-container">
        <!-- Medical Cross Icon -->
        <svg class="medical-icon" viewBox="0 0 24 24">
            <path d="M19,8H17V6A2,2 0 0,0 15,4H9A2,2 0 0,0 7,6V8H5A2,2 0 0,0 3,10V14A2,2 0 0,0 5,16H7V18A2,2 0 0,0 9,20H15A2,2 0 0,0 17,18V16H19A2,2 0 0,0 21,14V10A2,2 0 0,0 19,8M15,18H9V16H15V18M19,14H17V12H15V14H9V12H7V14H5V10H7V12H9V10H15V12H17V10H19V14Z"/>
        </svg>

        <!-- Logo Text -->
        <h1 class="logo-text">
            <span class="car">CAR</span><span class="med">MED</span>-<span class="brief">BRIEF</span>
        </h1>
        
        <!-- Tagline -->
        <p class="tagline">Professional Medical Billing Solutions</p>
        
        <!-- Features -->
        <div class="features">
            <div class="feature">
                <svg class="feature-icon" viewBox="0 0 24 24">
                    <path d="M9,11H7V9H9V11M13,11H11V9H13V11M17,11H15V9H17V11M19,3H18V1H16V3H8V1H6V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M19,19H5V8H19V19Z"/>
                </svg>
                <span class="feature-text">Streamlined Billing</span>
            </div>
            
            <div class="feature">
                <svg class="feature-icon" viewBox="0 0 24 24">
                    <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,16.5L6.5,12L7.91,10.59L11,13.67L16.59,8.09L18,9.5L11,16.5Z"/>
                </svg>
                <span class="feature-text">Accurate Claims</span>
            </div>
            
            <div class="feature">
                <svg class="feature-icon" viewBox="0 0 24 24">
                    <path d="M12,2A2,2 0 0,1 14,4C14,4.74 13.6,5.39 13,5.73V7H14A7,7 0 0,1 21,14H22A1,1 0 0,1 23,15V18A1,1 0 0,1 22,19H21V20A2,2 0 0,1 19,22H5A2,2 0 0,1 3,20V19H2A1,1 0 0,1 1,18V15A1,1 0 0,1 2,14H3A7,7 0 0,1 10,7H11V5.73C10.4,5.39 10,4.74 10,4A2,2 0 0,1 12,2Z"/>
                </svg>
                <span class="feature-text">Healthcare Focus</span>
            </div>
        </div>
    </div>
</body>
</html>
