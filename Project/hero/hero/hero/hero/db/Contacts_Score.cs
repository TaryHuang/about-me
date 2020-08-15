using System;
using System.Data.Linq;
using System.Data.Linq.Mapping;
using System.ComponentModel;
using System.Collections.ObjectModel;
using System.Data;

namespace hero
{
    //實作INotifyPropertyChanged與INotifyPropertyChanging介面，做為屬性(欄位)值變更時的事件觸發。
    [Table(Name="Contacts_Score")]
    public class Contacts_Score : INotifyPropertyChanged, INotifyPropertyChanging
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



        private int gScore;
        [Column(DbType = "int NULL", CanBeNull = false, Storage = "Score")]
        public int Score
        {
            get
            {
                return gScore;
            }
            set
            {
                NotifyPropertyChanging("Score");
                gScore = value;
                NotifyPropertyChanging("Score");
            }
        }


        private int gLv;
        [Column(DbType = "int NULL", CanBeNull = false, Storage = "Lv")]
        public int Lv
        {
            get
            {
                return gLv;
            }
            set
            {
                NotifyPropertyChanging("Lv");
                gLv = value;
                NotifyPropertyChanging("Lv");
            }
        }


        private DateTime gDatetime;
        [Column(DbType = "Datetime NULL", CanBeNull = false, Storage = "Datetime")]
        public DateTime Datetime
        {
            get
            {
                return gDatetime;
            }
            set
            {
                NotifyPropertyChanging("Datetime");
                gDatetime = value;
                NotifyPropertyChanging("Datetime");
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
