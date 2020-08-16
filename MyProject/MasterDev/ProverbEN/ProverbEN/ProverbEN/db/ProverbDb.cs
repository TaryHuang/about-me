using System;
using System.Data.Linq;
using System.Data.Linq.Mapping;
using System.ComponentModel;
using System.Collections.ObjectModel;
using System.Data;

namespace ProverbEN
{
    //實作INotifyPropertyChanged與INotifyPropertyChanging介面，做為屬性(欄位)值變更時的事件觸發。
    [Table(Name="ProverbDb")]
    public class ProverbDb : INotifyPropertyChanged, INotifyPropertyChanging
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







        private string gCWORD;
        [Column(DbType = "NVarChar(100) NULL", CanBeNull = false, Storage = "CWORD")]
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



        private string gDWORD;
        [Column(DbType = "NVarChar(200) NULL", CanBeNull = false, Storage = "DWORD")]
        public string DWORD
        {
            get
            {
                return gDWORD;
            }
            set
            {
                NotifyPropertyChanging("DWORD");
                gDWORD = value;
                NotifyPropertyChanging("DWORD");
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
