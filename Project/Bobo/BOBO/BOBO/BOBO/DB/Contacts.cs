using System;
using System.Data.Linq;
using System.Data.Linq.Mapping;
using System.ComponentModel;
using System.Collections.ObjectModel;
using System.Data;

namespace BOBO
{
    //實作INotifyPropertyChanged與INotifyPropertyChanging介面，做為屬性(欄位)值變更時的事件觸發。
    [Table(Name="Contacts")]
    public class Contacts : INotifyPropertyChanged, INotifyPropertyChanging
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



        private string gERI;
        [Column(DbType = "NVarChar(10) NULL", CanBeNull = false, Storage = "ERI")]
        public string ERI
        {
            get
            {
                return gERI;
            }
            set
            {
                NotifyPropertyChanging("ERI");
                gERI = value;
                NotifyPropertyChanging("ERI");
            }
        }



        private int gLVNO;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "LVNO")]
        public int LVNO
        {
            get
            {
                return gLVNO;
            }
            set
            {
                NotifyPropertyChanging("LVNO");
                gLVNO = value;
                NotifyPropertyChanging("LVNO");
            }
        }





        private int gSIZE;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "SIZE")]
        public int SIZE
        {
            get
            {
                return gSIZE;
            }
            set
            {
                NotifyPropertyChanging("SIZE");
                gSIZE = value;
                NotifyPropertyChanging("SIZE");
            }
        }




        private int gSORT;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "SORT")]
        public int SORT
        {
            get
            {
                return gSORT;
            }
            set
            {
                NotifyPropertyChanging("SORT");
                gSORT = value;
                NotifyPropertyChanging("SORT");
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
