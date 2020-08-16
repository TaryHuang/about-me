using System;
using System.Data.Linq;
using System.Data.Linq.Mapping;
using System.ComponentModel;
using System.Collections.ObjectModel;
using System.Data;

namespace Stopwatch
{
    //實作INotifyPropertyChanged與INotifyPropertyChanging介面，做為屬性(欄位)值變更時的事件觸發。
    [Table(Name = "MTABLE")]
    public class MTABLE : INotifyPropertyChanged, INotifyPropertyChanging
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




        private string gDATE;
        [Column(DbType = "NVarChar(20) NULL", CanBeNull = false, Storage = "DATE")]
        public string DATE
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
