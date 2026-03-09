<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coco Stories - Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .container {
            max-width: 800px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 60px 40px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 3em;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }
        
        .header p {
            font-size: 1.2em;
            opacity: 0.9;
        }
        
        .content {
            padding: 60px 40px;
            text-align: center;
        }
        
        .content h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 1.8em;
        }
        
        .content p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 40px;
            font-size: 1.05em;
        }
        
        .stories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }
        
        .story-card {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 12px;
            border-left: 5px solid #667eea;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .story-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.2);
            border-left-color: #764ba2;
        }
        
        .story-card h3 {
            color: #333;
            margin-bottom: 10px;
            font-size: 1.3em;
        }
        
        .story-card p {
            color: #999;
            font-size: 0.95em;
            margin: 0;
            line-height: 1.6;
        }
        
        .btn {
            display: inline-block;
            padding: 15px 40px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1em;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }
        
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #999;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📖 Coco Stories</h1>
            <p>Moments from yesterday, memories for today</p>
        </div>
        
        <div class="content">
            <h2>Welcome!</h2>
            <p>Explore Coco's delightful stories and adventures. Each story is a collection of moments that capture the joy and wonder of yesterday.</p>
            
            <div class="stories">
                <div class="story-card" onclick="goToStory('coco-school')">
                    <h3>📚 School Day</h3>
                    <p>Follow Coco through a day at school—from morning drop-off to afternoon pickup.</p>
                    <button class="btn" style="width: 100%; margin-top: 15px;">Read Story →</button>
                </div>
                
                <div class="story-card" onclick="goToStory('coco-adventure')">
                    <h3>🎉 Vanderbilt Park</h3>
                    <p>A Saturday adventure at the park with playtime, snow, dinner, and sweet dreams.</p>
                    <button class="btn" style="width: 100%; margin-top: 15px;">Read Story →</button>
                </div>
            </div>
            
            <p style="margin-top: 50px; font-size: 0.95em; color: #999;">Click on a story to begin reading.</p>
        </div>
        
        <div class="footer">
            <p>&copy; 2026 Coco Stories. All moments preserved with love. 💕</p>
        </div>
    </div>
    
    <script>
        function goToStory(storyId) {
            // Update this path to match your deployment structure
            window.location.href = './yesterday/#' + storyId;
        }
    </script>
</body>
</html>
