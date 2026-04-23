<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
        }
        h1 {
            color: #fff;
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 40px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
            overflow: hidden;
        }
        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            padding: 24px 32px;
            font-size: 1.25rem;
            font-weight: 600;
        }
        .user-list {
            list-style: none;
        }
        .user-item {
            display: flex;
            align-items: center;
            padding: 20px 32px;
            border-bottom: 1px solid #eee;
            transition: background 0.2s;
        }
        .user-item:last-child {
            border-bottom: none;
        }
        .user-item:hover {
            background: #f8f9fa;
        }
        .avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.1rem;
            margin-right: 20px;
            flex-shrink: 0;
        }
        .user-info {
            flex: 1;
        }
        .user-name {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 4px;
        }
        .user-email {
            color: #666;
            font-size: 0.9rem;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 32px;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: opacity 0.2s;
        }
        .back-link:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Our Team</h1>
        <div class="card">
            <div class="card-header">User Directory</div>
            <ul class="user-list">
                @foreach($users as $user)
                    <li class="user-item">
                        <div class="avatar">{{ strtoupper(substr($user->name, 0, 1)) }}</div>
                        <div class="user-info">
                            <div class="user-name">{{ $user->name }}</div>
                            <div class="user-email">{{ $user->email }}</div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <a href="{{ route('welcome') }}" class="back-link">Back to Home</a>
    </div>
</body>
</html>