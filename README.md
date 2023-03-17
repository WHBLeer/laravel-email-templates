# laravel-mail-templates
Laravel (Blade)会员和电商网站电子邮件模板。

与Laravel: Mailer, Language, Config完全集成，并为Laravel使用Blade模板格式。从语言系统或配置设置中设置内容选项。 

易于添加到当前应用程序，不需要复杂的集成步骤。三个简单的集成步骤


## 可用模板
- [x] 注册欢迎信息 Template
- [x] 验证邮箱 Template
- [x] 忘记密码 Template
- [x] 付款成功 Template
- [ ] 商户下单 Template
- [ ] 买家下单 Template
- [ ] 订单发货 Template
- [ ] 需求提交 Template
- [ ] 需求回复 Template
- [ ] 账单/发票 Template
- [ ] 提醒 Template

## 安装使用

在应用程序上安装这个库

```sh
composer require --dev sanlilin/laravel-email-templates
```

自动复制文件和文件夹到相同的结构在您的Laravel应用程序。

```php
php artisan vendor:publish --provider=Sanlilin\\EmailTemplatesServiceProvider
```

如果您只想复制文件的一部分，您可以使用标记。

```php
php artisan vendor:publish --tag=email-templates-config    // 发布配置文件
php artisan vendor:publish --tag=email-templates-views     // 发布视图文件
php artisan vendor:publish --tag=email-templates-lang      // 发布多语言文件
php artisan vendor:publish --tag=email-templates-img       // 发布图片文件
php artisan vendor:publish --tag=email-templates-app       // 发布App文件
```

### 手动

或者，您可以自己将这些文件复制到您的Laravel应用程序中。

```bash
    /config/email-template.php 
    /resources/views/email/*
    /resources/lang/en/email.php
    /public/assets/img/email/*
    /app/Mail/*
```

## 使用

* 编辑 ``` config/email-template.php ``` 和 ``` /resources/lang/en/email.php ``` 中的值

    **注:** 只改变右边的值，不改变左边的变量

* 确保您的 ```config/mail.php``` 文件已更新，以设置全局地址等。
```php
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],
```

## 发送欢迎信息邮件
从控制器中简单地调用mailable。您还可以将一些可选变量作为数组发送。



```php
    use App\User;
    use App\Mail\WelcomeMember;

    $options = array(
        'unsubscribe_url'   => 'http://mysite.com/unsub',
        'play_url'          => 'http://google-play.com/myapp',
        'ios_url'           => 'http://apple-store.com/myapp',
        'sendfriend_url'    => 'http://mysite.com/send_friend',
        'webview_url'       => 'http://mysite.com/webview_url',
    );


    $user = User:find(1);
    Mail::to($user)->send(new WelcomeMember($user, $options));
```

## 预览邮件
如果您想在使用电子邮件之前预览它们，请将```routes/web.php```的内容复制到您的版本。记得在启动应用程序之前删除这些路由。

然后打开这些url以预览邮件模板

* ```yourdomain.com/email_template/welcome_member```
* ```yourdomain.com/email_template/verify_email```
* ```yourdomain.com/email_template/forgot_password```
* ```yourdomain.com/email_template/thanks_payment```

示例路由 ``` routes/web.php ```

```php
    Route::get('email_template/welcome_member', function () {
    
        $member = App\User::find(1);
        return new App\Mail\WelcomeMember($member);
    });

```