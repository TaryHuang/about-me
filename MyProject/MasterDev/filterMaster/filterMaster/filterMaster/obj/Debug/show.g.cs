﻿#pragma checksum "C:\Users\Tary\Desktop\PROJ\filterMaster\filterMaster\filterMaster\show.xaml" "{406ea660-64cf-4c82-b6f0-42d48172a799}" "A8CD202D1BF6B6554CC48842B5974313"
//------------------------------------------------------------------------------
// <auto-generated>
//     這段程式碼是由工具產生的。
//     執行階段版本:4.0.30319.261
//
//     對這個檔案所做的變更可能會造成錯誤的行為，而且如果重新產生程式碼，
//     變更將會遺失。
// </auto-generated>
//------------------------------------------------------------------------------

using Microsoft.Phone.Controls;
using Microsoft.Phone.Shell;
using System;
using System.Windows;
using System.Windows.Automation;
using System.Windows.Automation.Peers;
using System.Windows.Automation.Provider;
using System.Windows.Controls;
using System.Windows.Controls.Primitives;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Ink;
using System.Windows.Input;
using System.Windows.Interop;
using System.Windows.Markup;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Media.Imaging;
using System.Windows.Resources;
using System.Windows.Shapes;
using System.Windows.Threading;


namespace filterMaster {
    
    
    public partial class show : Microsoft.Phone.Controls.PhoneApplicationPage {
        
        internal System.Windows.Controls.Grid LayoutRoot;
        
        internal System.Windows.Controls.StackPanel TitlePanel;
        
        internal System.Windows.Controls.Grid PHOTO;
        
        internal Microsoft.Phone.Shell.ApplicationBarMenuItem M_LIGHT;
        
        internal Microsoft.Phone.Shell.ApplicationBarMenuItem M_Contrast;
        
        internal Microsoft.Phone.Shell.ApplicationBarMenuItem M_RGB;
        
        internal Microsoft.Phone.Shell.ApplicationBarMenuItem M_COLOR;
        
        internal Microsoft.Phone.Shell.ApplicationBarMenuItem M_MASK;
        
        private bool _contentLoaded;
        
        /// <summary>
        /// InitializeComponent
        /// </summary>
        [System.Diagnostics.DebuggerNonUserCodeAttribute()]
        public void InitializeComponent() {
            if (_contentLoaded) {
                return;
            }
            _contentLoaded = true;
            System.Windows.Application.LoadComponent(this, new System.Uri("/filterMaster;component/show.xaml", System.UriKind.Relative));
            this.LayoutRoot = ((System.Windows.Controls.Grid)(this.FindName("LayoutRoot")));
            this.TitlePanel = ((System.Windows.Controls.StackPanel)(this.FindName("TitlePanel")));
            this.PHOTO = ((System.Windows.Controls.Grid)(this.FindName("PHOTO")));
            this.M_LIGHT = ((Microsoft.Phone.Shell.ApplicationBarMenuItem)(this.FindName("M_LIGHT")));
            this.M_Contrast = ((Microsoft.Phone.Shell.ApplicationBarMenuItem)(this.FindName("M_Contrast")));
            this.M_RGB = ((Microsoft.Phone.Shell.ApplicationBarMenuItem)(this.FindName("M_RGB")));
            this.M_COLOR = ((Microsoft.Phone.Shell.ApplicationBarMenuItem)(this.FindName("M_COLOR")));
            this.M_MASK = ((Microsoft.Phone.Shell.ApplicationBarMenuItem)(this.FindName("M_MASK")));
        }
    }
}

