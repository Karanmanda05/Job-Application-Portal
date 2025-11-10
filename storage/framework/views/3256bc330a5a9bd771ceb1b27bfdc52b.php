<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing:border-box;
        }
        body{
            background: linear-gradient(160deg, #000428, #004e92);
            display:flex;
            justify-content:center;
            align-items:center;
            height: 100vh;
            width: 100vw;
        }

        .container{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            height: 100%;
            width: 100%;
        }

        .main_table{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 32px 28px;
            background: rgba(255,255,255,0.08);
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.18);
            display: flex;
            flex-direction: column;
            gap: 16px;
            border:none;
        }
        tr{
            padding: 2rem;
        }
        td{
            font-size:1.7rem;
            color:white;
            padding: 1rem;
        }
        input{
            padding: 10px;
            border-radius: 6px;
            border:none;
        }

        p{
            color:white;
            margin:auto;
        }

        p a{
            color:grey;
        }

        p a:hover{
            font-size:1.2rem;
            color:red;
        }

        button{
            padding: 10px;
            border-radius:10px;
            border:none;
            display:flex;
            margin: auto;
        }

        button:hover{
            cursor:pointer;
            scale:1.2;
        }
    </style>
</head> 
<body>
    <?php if(session('success')): ?>
    <div style="color:white; background-color:green; text-align:center;"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <?php if(session('error')): ?>
    <div style="color:white; background-color:red; text-align-center;"><?php echo e(session('error')); ?></div>
    <?php endif; ?>
    
    <div class="container">
    <form action="<?php echo e(route('auth.check')); ?>" method="POST" class="main_table" >
        <?php echo csrf_field(); ?>
        <table >
            <tr>
                <td>Email</td>
                <td><input type="email" placeholder="ABC@gmail.com" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Submit</button></td>
            </tr>
        </table>
        <p>If not registered click here !! <a href="<?php echo e(url('/register')); ?>">Register Now</a></p>
    </form>
    </div>

   
</body>
</html><?php /**PATH C:\Users\yadav\OneDrive\Documents\Desktop\Laravelandcomposer\mini_project\resources\views/Login.blade.php ENDPATH**/ ?>