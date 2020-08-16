using System;
using System.Data.Linq;
using System.Data.Linq.Mapping;
using System.ComponentModel;
using System.Collections.ObjectModel;
using System.Data;

namespace readEnglish
{
    //實作INotifyPropertyChanged與INotifyPropertyChanging介面，做為屬性(欄位)值變更時的事件觸發。
    [Table(Name="Sort")]
    public class Sort : INotifyPropertyChanged, INotifyPropertyChanging
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





        private string gCNAME;
        [Column(DbType = "NVarChar(100) NULL", CanBeNull = false, Storage = "CNAME")]
        public string CNAME
        {
            get
            {
                return gCNAME;
            }
            set
            {
                NotifyPropertyChanging("CNAME");
                gCNAME = value;
                NotifyPropertyChanging("CNAME");
            }
        }



        private string gCtype;
        [Column(DbType = "NVarChar(10) NULL", CanBeNull = false, Storage = "Ctype")]
        public string Ctype
        {
            get
            {
                return gCtype;
            }
            set
            {
                NotifyPropertyChanging("Ctype");
                gCtype = value;
                NotifyPropertyChanging("Ctype");
            }
        }




        private string gNum;
        [Column(DbType = "NVarChar(10) NULL", CanBeNull = false, Storage = "Num")]
        public string Num
        {
            get
            {
                return gNum;
            }
            set
            {
                NotifyPropertyChanging("Num");
                gNum = value;
                NotifyPropertyChanging("Num");
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
