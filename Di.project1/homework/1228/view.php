<?php
namespace views\table;

class Table
{
    public $title = '';
    public $sub_title = '';
    public $form_action = ''; //form 的屬性action 的檔案位置
    public $cancel_but = '';
    public $log_disable = '';
    public $logt_disabled = '';
    public $jot_disabled = '';
    public $jot_required = '';
    public function showHtml()
    {
        echo
            "<!DOCTYPE html>
              <html lang=en>

              <head>
                <meta charset=UTF-8>
                <meta http-equiv=X-UA-Compatible content=IE=edge>
                <meta name=viewport content=width=device-width, initial-scale=1.0>
                <title>{$this->title}管理系統-{$this->sub_title}</title>
              </head>
              <body>
                <h1 align='center'>{$this->title}管理系統 -{$this->sub_title}</h1>
                <p align='center'><a href='php_mysqli_read.php'>回主畫面</a></p>";
        echo
            "<form action={$this->form_action} method='POST' name='formAdd'><table border='1' align='center' cellpadding=4>
              <tr>
                <th>欄位名稱</th>
                <th>資料</th>
              </tr>
              <tr>
                <td>姓名</td>
                <td><input type='text' name='m_name' required>
                </td>
              </tr>
              <tr>
                <td>使用者名稱</td>
                <td><input type='text' name='m_username'  required>
                </td>
              </tr>
              <tr>
              <td>密碼</td>
              <td><input type='password' name='m_passwd'  required>
              </td>
            </tr>
            <tr>
              <td>性別</td>
              <td><input type='radio' name='m_sex' value='M' checked>男
                <input type='radio' name='m_sex' value='F'>女
                <input type='radio' name='m_sex' value='E'>其他
              </td>
            </tr>
            <tr>
              <td>生日</td>
              <td><input type='date' name='m_birthday' required></td>
            </tr>
            <tr>
              <td>使用者身分</td>
              <td><input type='radio' name='m_level' value='admin' checked>管理員
                <input type='radio' name='m_level' value='member'>會員
              </td>
            </tr>
            <tr>
              <td>電子郵件</td>
              <td><input type='email' name='m_Email'>
              </td>
            </tr>
            <tr>
              <td>個人網頁</td>
              <td><input type='text' name='m_url'>
              </td>
            </tr>

            <tr>
              <td>電話</td>
              <td><input type='tel' name='m_Phone'>
              </td>
            </tr>
            <tr>
          <td>地址</td>
          <td><input type='text' name='m_address'>
          </td>
        </tr>
        <tr>
          <td>登入次數</td>
          <td><input {$this->log_disabled} type='number' name='m_login'></td>
        </tr>
        <tr>
          <td>上次登入時間</td>
          <td><input {$this->logt_disabled} type='date' name='m_logintime'></td>
        </tr>
        <tr>
          <td>加入時間</td>
          <td><input {$this->jot_disabled} type='date' name='m_jointime' {$this->jot_required}></td>
        </tr>

        <tr>
          <td colspan=2 align=center>
            <input type='hidden' name='action' value='add'>
            <input type='submit' name='sub_button' value={$this->sub_title}>
            <input type='reset' name='re_button' value={$this->cancel_but}>
          </td>
        </tr>

      </table>
    </form>
  </body>
  </html>";
    }
}
