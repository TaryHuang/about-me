using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Shapes;
using Microsoft.Phone.Controls;
using Facebook;
namespace FBreport
{
    public partial class MainPage : PhoneApplicationPage
    {
        // 建構函式

        private const string AppId = "207754682763407";
        public string _accessToken;
        public string _userId;
        public string _lastMessageId;
        public string _FbName;


        private const string ExtendedPermissions = "email,publish_stream,read_stream,publish_actions,manage_pages,create_event,offline_access,read_mailbox";
        private readonly FacebookClient _fb = new FacebookClient();
        public MainPage()
        {
            InitializeComponent();

            var loginUrl = GetFacebookLoginUrl(AppId, ExtendedPermissions);
            FbBrowser.Navigate(loginUrl);
        }


        private Uri GetFacebookLoginUrl(string appId, string extendedPermissions)
        {
            var parameters = new Dictionary<string, object>();
            parameters["client_id"] = appId;
            parameters["redirect_uri"] = "https://www.facebook.com/connect/login_success.html";
            parameters["response_type"] = "token";
            parameters["display"] = "touch";

            // add the 'scope' only if we have extendedPermissions.
            if (!string.IsNullOrEmpty(extendedPermissions))
            {
                // A comma-delimited list of permissions
                parameters["scope"] = extendedPermissions;
            }

            return _fb.GetLoginUrl(parameters);
        }
        private void PhoneApplicationPage_Loaded(object sender, RoutedEventArgs e)
        {

        }

        private void FbBrowser_Navigated(object sender, System.Windows.Navigation.NavigationEventArgs e)
        {

            FacebookOAuthResult oauthResult;
            if (!_fb.TryParseOAuthCallbackUrl(e.Uri, out oauthResult))
            {
                return;
            }

            if (oauthResult.IsSuccess)
            {
                var accessToken = oauthResult.AccessToken;
                LoginSucceded(accessToken);
            }
            else
            {
                // user cancelled
                MessageBox.Show(oauthResult.ErrorDescription);
            }
        }




        private void LoginSucceded(string accessToken)
        {
            var fb = new FacebookClient(accessToken);

            fb.GetCompleted += (o, e) =>
            {
                if (e.Error != null)
                {
                    Dispatcher.BeginInvoke(() => MessageBox.Show(e.Error.Message));
                    return;
                }

                var result = (IDictionary<string, object>)e.GetResultData();
                MessageBox.Show(result.ToString());

                var id = (string)result["id"];

 

                _accessToken = accessToken;
                _userId = id;
                _FbName = " " + (string)result["name"];

                //Dispatcher.BeginInvoke(() => tShow());

            };


            //var query = string.Format("SELECT uid,pic_square FROM user ");
            // Note: For windows phone 7, make sure to add [assembly: InternalsVisibleTo("Facebook")] if you are using anonymous objects as parameter.

            var parameters = new Dictionary<string, object>();
            //parameters["q"] = string.Format("select thread_id,message_count from thread where viewer_id = me() and folder_id = 0");
            parameters["q"] = string.Format("SELECT message_id,body,viewer_id,created_time FROM message WHERE thread_id = 354635717946432 and viewer_id = me()");

            fb.GetAsync("fql", parameters);
            //fb.GetAsync("me");
        }



    }
}