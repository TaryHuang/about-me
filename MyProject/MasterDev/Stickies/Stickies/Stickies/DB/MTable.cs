using System;
using System.Data.Linq;
using System.Data.Linq.Mapping;
using System.ComponentModel;
using System.Collections.ObjectModel;
using System.Data;
using System.Windows.Media;
using System.Windows.Shapes;
namespace Stickies
{
    //實作INotifyPropertyChanged與INotifyPropertyChanging介面，做為屬性(欄位)值變更時的事件觸發。
    [Table(Name = "MTable")]
    public class MTable : INotifyPropertyChanged, INotifyPropertyChanging
    {
        
        private int gID;
        [Column(IsPrimaryKey = true, IsDbGenerated = true,
                DbType = "INT NOT NULL Identity", CanBeNull = false, AutoSync = AutoSync.OnInsert)]
        public int ID
        {
            get
            {
                return gID;
            }
            set
            {
                NotifyPropertyChanging("ID");
                gID = value;
                NotifyPropertyChanged("ID");
            }
        }


        private string gTEXT;
        [Column(DbType = "NVarChar(200) NULL", CanBeNull = false, Storage = "TEXT")]
        public string TEXT
        {
            get
            {
                return gTEXT;
            }
            set
            {
                NotifyPropertyChanging("TEXT");
                gTEXT = value;
                NotifyPropertyChanging("TEXT");
            }
        }


        private string gImgUri;
        [Column(DbType = "NVarChar(30) NULL", CanBeNull = false, Storage = "ImgUri")]
        public string ImgUri
        {
            get
            {
                return gImgUri;
            }
            set
            {
                NotifyPropertyChanging("ImgUri");
                gImgUri = value;
                NotifyPropertyChanging("ImgUri");
            }
        }



        private int gBg__A;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "Bg__A")]
        public int Bg__A
        {
            //@ #  AAA ABC ABB 
            get
            {
                return gBg__A;
            }
            set
            {
                NotifyPropertyChanging("Bg__A");
                gBg__A = value;
                NotifyPropertyChanging("Bg__A");
            }
        }


        private int gBg__R;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "Bg__R")]
        public int Bg__R
        {
            //@ #  AAA ABC ABB 
            get
            {
                return gBg__R;
            }
            set
            {
                NotifyPropertyChanging("Bg__R");
                gBg__R = value;
                NotifyPropertyChanging("Bg__R");
            }
        }

        private int gBg__G;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "Bg__G")]
        public int Bg__G
        {
            //@ #  AAA ABC ABB 
            get
            {
                return gBg__G;
            }
            set
            {
                NotifyPropertyChanging("Bg__G");
                gBg__G = value;
                NotifyPropertyChanging("Bg__G");
            }
        }


        private int gBg__B;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "Bg__B")]
        public int Bg__B
        {
            //@ #  AAA ABC ABB 
            get
            {
                return gBg__B;
            }
            set
            {
                NotifyPropertyChanging("Bg__B");
                gBg__B = value;
                NotifyPropertyChanging("Bg__B");
            }
        }













        private int gFont__A;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "Font__A")]
        public int Font__A
        {
            //@ #  AAA ABC ABB 
            get
            {
                return gFont__A;
            }
            set
            {
                NotifyPropertyChanging("Font__A");
                gFont__A = value;
                NotifyPropertyChanging("Font__A");
            }
        }

        private int gFont__R;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "Font__R")]
        public int Font__R
        {
            //@ #  AAA ABC ABB 
            get
            {
                return gFont__R;
            }
            set
            {
                NotifyPropertyChanging("Font__R");
                gFont__R = value;
                NotifyPropertyChanging("Font__R");
            }
        }

        private int gFont__G;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "Font__G")]
        public int Font__G
        {
            //@ #  AAA ABC ABB 
            get
            {
                return gFont__G;
            }
            set
            {
                NotifyPropertyChanging("Font__G");
                gFont__G = value;
                NotifyPropertyChanging("Font__G");
            }
        }

        private int gFont__B;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "Font__B")]
        public int Font__B
        {
            //@ #  AAA ABC ABB 
            get
            {
                return gFont__B;
            }
            set
            {
                NotifyPropertyChanging("Font__B");
                gFont__B = value;
                NotifyPropertyChanging("Font__B");
            }
        }

        private DateTime gDATE;
        [Column(DbType = "DateTime NULL", CanBeNull = false, Storage = "DATE")]
        public DateTime DATE
        {
            get
            {
                return gDATE;
            }
            set
            {
                NotifyPropertyChanging("DATE");
                gDATE = value;
                NotifyPropertyChanging("DATE");
            }
        }





        #region INotifyPropertyChanging觸發事件
        public event PropertyChangingEventHandler PropertyChanging;

        private void NotifyPropertyChanging(string pPropertyName){
            if (PropertyChanging!=null){
                PropertyChanging(this, new PropertyChangingEventArgs(pPropertyName));
            }
        }
        #endregion

        #region INotifyPropertyChanged觸發事件
        public event PropertyChangedEventHandler PropertyChanged;

        private void NotifyPropertyChanged(string pPropertyName)
        {
            if (PropertyChanged != null)
            {
                PropertyChanged(this, new PropertyChangedEventArgs(pPropertyName));
            }
        }
        #endregion
    }



}
