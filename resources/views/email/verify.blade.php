<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>
<body style="font-family: Arial; box-sizing: border-box; background-color: transparent; color: #1C1A1A; height: 100%; hyphens: auto; line-height: 1.4; margin: 0;padding: 0;width: 100%;-moz-hyphens: auto; -ms-word-break: break-all; width: 100% !important; -webkit-hyphens: auto; -webkit-text-size-adjust: none;word-break: break-all; word-break: break-word;">
    <style>
       .gt a {
            color: #1C1A1A !important;
        }
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>

    <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" style="margin: 0 auto;padding: 0;max-width: 600px;width: 100%;-premailer-cellpadding: 0;-premailer-cellspacing: 0;-premailer-width: 100%;">
        <tr>
            <td align="center">
                <table class="content" width="100%" cellpadding="0" cellspacing="0" style="margin: 0;padding: 0;width: 100%;-premailer-cellpadding: 0;-premailer-cellspacing: 0;-premailer-width: 100%;">
                    <!--HEADER-->
                    <tr class="header" style="padding: 25px 0;text-align: center;background-image: url(https://i.imgur.com/K6jyNTu.png);background-repeat: no-repeat;height: 148px;background-size: contain;">
                        <td>
                            <h1 style="color: white;padding: 0 15px;max-width: 250px;width: 100%; margin: 0 0 20px;font-size: 40px;font-weight: 300;text-align: left;float: left;">Verify your email</h1>
                        </td>
                    </tr>
                    <!--CONTENT-->
                    <tr>
                        <td class="body" width="100%" cellpadding="0" cellspacing="0">
                            <table class="inner-body" align="center" width="600" cellpadding="0" cellspacing="0" style="background-color: #FFFFFF;margin: 20px auto 0;padding: 0;width: 600px;-premailer-cellpadding: 0; -premailer-cellspacing: 0;-premailer-width: 600px;">
                                <tr>
                                    <td class="content-cell" style="padding:10px 35px">
                                        <h2 style="color: #1C1A1A;font-size: 24px;font-weight: bold;margin-top: 0;text-align: left; text-transform: capitalize;margin-bottom: 25px;">Hi {{ $name }},</h2>
                                        <h3 style="color: #1C1A1A;font-size: 20px;font-weight: 400;margin-top: 0;text-align: left;margin-bottom: 30px;">Thank you for registering to AutoMan!</h3>
                                        <p style="line-height:normal;text-align:left; color: #1C1A1A;font-size: 16px;margin-top: 0;text-align: left;margin-bottom: 20px;">Before we get started, we just need to confirm that this email <strong class="email">{{ $email }}</strong> is yours.</p>
                                        <p style="line-height:normal;text-align:left; color: #1C1A1A;font-size: 16px;margin-top: 0;text-align: left;margin-bottom: 35px;">To continue, please click the link below:</p>
                                        <p style="text-align:center;"><a href="{{ route('activate.user', $activation_code) }}" style="color: #fd3d44;">{{ route('activate.user', $activation_code) }}</a></p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!--FOOTER-->
                    <tr>
                        <td class="footer" width="100%" cellpadding="0" cellspacing="0" style="margin: 0 auto;padding: 0;text-align: center;width: 600px;-premailer-cellpadding: 0;-premailer-cellspacing: 0;-premailer-width: 600px;">
                            <table class="inner-body" align="center" width="600" cellpadding="0" cellspacing="0" style="background-color: #FFFFFF;margin: 20px auto 0;padding: 0;width: 600px;-premailer-cellpadding: 0; -premailer-cellspacing: 0;-premailer-width: 600px;">
                                <tr>
                                    <td class="content-cell" style="padding: 40px 35px 10px;text-align:left;">
                                        <p style="line-height:normal;text-align:left; color: #1C1A1A;font-size: 14px; margin-top: 0;text-align: left; margin-bottom: 10px;">Thank you,</p>
                                        <img src="https://i.imgur.com/fMVXCHp.png">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>


