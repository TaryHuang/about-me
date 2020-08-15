using System;
using System.Data.Linq;
using System.Data.Linq.Mapping;
using System.ComponentModel;
using System.Collections.ObjectModel;
using System.Data;

namespace hero
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



        private string gCNAME;
        [Column(DbType = "NVarChar(10) NULL", CanBeNull = false, Storage = "CNAME")]
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



        private byte[] gXML;
         [Column(DbType = "varbinary(1000) NULL", CanBeNull = true, Storage = "XML")]
        public byte[] XML
        {
            get
            {
                return gXML;
            }
            set
            {
                NotifyPropertyChanging("XML");
                gXML = value;
                NotifyPropertyChanging("XML");
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
