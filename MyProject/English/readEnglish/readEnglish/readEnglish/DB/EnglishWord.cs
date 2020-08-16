using System;
using System.Data.Linq;
using System.Data.Linq.Mapping;
using System.ComponentModel;
using System.Collections.ObjectModel;
using System.Data;

namespace readEnglish
{
    //實作INotifyPropertyChanged與INotifyPropertyChanging介面，做為屬性(欄位)值變更時的事件觸發。
    [Table(Name="EnglishWord")]
    public class EnglishWord : INotifyPropertyChanged, INotifyPropertyChanging
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



        private int gCTYPE;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "CTYPE")]
        public int CTYPE
        {
            //@ #  AAA ABC ABB 
            get
            {
                return gCTYPE;
            }
            set
            {
                NotifyPropertyChanging("CTYPE");
                gCTYPE = value;
                NotifyPropertyChanging("CTYPE");
            }
        }




        private string gCWORD;
        [Column(DbType = "NVarChar(20) NULL", CanBeNull = false, Storage = "CWORD")]
        public string CWORD
        {
            get
            {
                return gCWORD;
            }
            set
            {
                NotifyPropertyChanging("CWORD");
                gCWORD = value;
                NotifyPropertyChanging("CWORD");
            }
        }



        //字首  查詢用 (加快演算法速度)
        private string gEWORD0;
        [Column(DbType = "NVarChar(1) NULL", CanBeNull = false, Storage = "EWORD0")]
        public string EWORD0
        {
            get
            {
                return gEWORD0;
            }
            set
            {
                NotifyPropertyChanging("EWORD0");
                gEWORD0 = value;
                NotifyPropertyChanging("EWORD0");
            }
        }

        private string gEWORD1;
        [Column(DbType = "NVarChar(30) NULL", CanBeNull = false, Storage = "EWORD1")]
        public string EWORD1
        {
            get
            {
                return gEWORD1;
            }
            set
            {
                NotifyPropertyChanging("EWORD1");
                gEWORD1 = value;
                NotifyPropertyChanging("EWORD1");
            }
        }





        private string gEWORD2;
        [Column(DbType = "NVarChar(30) NULL", CanBeNull = true, Storage = "EWORD2")]
        public string EWORD2
        {
            get
            {
                return gEWORD2;
            }
            set
            {
                NotifyPropertyChanging("EWORD2");
                gEWORD2 = value;
                NotifyPropertyChanging("EWORD2");
            }
        }




        private string gEWORD3;
        [Column(DbType = "NVarChar(30) NULL", CanBeNull = true, Storage = "EWORD3")]
        public string EWORD3
        {
            get
            {
                return gEWORD3;
            }
            set
            {
                NotifyPropertyChanging("EWORD3");
                gEWORD3 = value;
                NotifyPropertyChanging("EWORD3");
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






        private string gC1;
        [Column(DbType = "NVarChar(20) NULL", CanBeNull = true, Storage = "C1")]
        public string C1
        {
            get
            {
                return gC1;
            }
            set
            {
                NotifyPropertyChanging("C1");
                gC1 = value;
                NotifyPropertyChanging("C1");
            }
        }




        private string gC2;
        [Column(DbType = "NVarChar(20) NULL", CanBeNull = true, Storage = "C2")]
        public string C2
        {
            get
            {
                return gC2;
            }
            set
            {
                NotifyPropertyChanging("C2");
                gC2 = value;
                NotifyPropertyChanging("C2");
            }
        }


        private string gC3;
        [Column(DbType = "NVarChar(20) NULL", CanBeNull = true, Storage = "C3")]
        public string C3
        {
            get
            {
                return gC3;
            }
            set
            {
                NotifyPropertyChanging("C3");
                gC3 = value;
                NotifyPropertyChanging("C3");
            }
        }





        private string gC4;
        [Column(DbType = "NVarChar(20) NULL", CanBeNull = true, Storage = "C4")]
        public string C4
        {
            get
            {
                return gC4;
            }
            set
            {
                NotifyPropertyChanging("C4");
                gC4 = value;
                NotifyPropertyChanging("C4");
            }
        }





        private string gC5;
        [Column(DbType = "NVarChar(20) NULL", CanBeNull = true, Storage = "C5")]
        public string C5
        {
            get
            {
                return gC5;
            }
            set
            {
                NotifyPropertyChanging("C5");
                gC5 = value;
                NotifyPropertyChanging("C5");
            }
        }




        private string gC6;
        [Column(DbType = "NVarChar(20) NULL", CanBeNull = true, Storage = "C6")]
        public string C6
        {
            get
            {
                return gC6;
            }
            set
            {
                NotifyPropertyChanging("C6");
                gC6 = value;
                NotifyPropertyChanging("C6");
            }
        }

        private string gC7;
        [Column(DbType = "NVarChar(20) NULL", CanBeNull = true, Storage = "C7")]
        public string C7
        {
            get
            {
                return gC7;
            }
            set
            {
                NotifyPropertyChanging("C7");
                gC7 = value;
                NotifyPropertyChanging("C7");
            }
        }




        private string gC8;
        [Column(DbType = "NVarChar(20) NULL", CanBeNull = true, Storage = "C8")]
        public string C8
        {
            get
            {
                return gC8;
            }
            set
            {
                NotifyPropertyChanging("C8");
                gC8 = value;
                NotifyPropertyChanging("C8");
            }
        }



        /*
        private int  gN;
        [Column(DbType = "INT NULL", CanBeNull = true, Storage = "N")]
        public int N
        {
            get
            {

                return gN;
            }
            set
            {
                NotifyPropertyChanging("N");
                gN = value;
                NotifyPropertyChanging("N");
            }
        }
        */





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



    public class EnglishWordR
    {
        public int R
        {
            get
            {
                return DBHandler.Rnd.Next(0, 100);
            }
        }

        //public int ID;

        //public int Mylove;

        public string CTYPE;

        public string CWORD;

        //public string EWORD0;

        public string EWORD1;

        public string EWORD2;

        public string EWORD3;

        //public DateTime DATE;

        public string C1;

        public string C2;

        public string C3;

        public string C4;

        public string C5;

        public string C6;

        public string C7;

        public string C8;

        //public int N;
    }
}
