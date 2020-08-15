using System;
using System.Collections.Generic;
using System.Net;
using System.Windows.Controls;
using System.Windows.Navigation;
using System.Windows.Shapes;
using Microsoft.Phone.Controls;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;
namespace hero
{
    //關卡怪物定義檔

    public class LV 
    {

        List<MONSTER_IF> Monsters = new List<MONSTER_IF>();

        //Time為下一波攻擊時間,GROUP為目前第幾波群組攻擊,MAXGROUP為最大攻擊波數為
        int Time = 200,TimeTemp=0, GROUP=0, MAXGROUP=0;

        int LvNum;

        LV_IF L;


        


        public SCORE ScoreChgMoney;

        TARY_VIMG TITLE;//第幾關 顯示看版
        TARY_SCORE TITLE2;//第幾關 顯示看版



        public bool T_ScoreChgMoney = false;//是否啟動計分轉換金錢看板
        public LV(int num)
        {
            setLvNum = num;

            TITLE = new TARY_VIMG(GamePage.picLEVEL, new Vector2(180, 230));
            TITLE2 = new TARY_SCORE(GamePage.picNum, new Vector2(280, 230));
            TITLE2.Score = num;

        }



        public LV(int num, int gp)
        {
            //此為指定關卡+直接跳到關卡的第幾群組

            setLvNum = num;
            GROUP = gp;
            TITLE = new TARY_VIMG(GamePage.picLEVEL, new Vector2(180, 230));
            TITLE2 = new TARY_SCORE(GamePage.picNum, new Vector2(280, 230));
            TITLE2.Score = num;

        }



        public void Draw(SpriteBatch P)
        {
            if (group==0 && TITLE2.Alpha>0)
            {
                //若不是第一波攻擊群組 就不顯示看板
                TITLE.draw(P);
                TITLE2.draw(P);
                TITLE2.Alpha -= 10f;
            }


            if (T_ScoreChgMoney)
            {
                ScoreChgMoney.Draw(P);
                return;
            }


            for (int i = 0; i < Monsters.Count; i++)
            {
                Monsters[i].Draw(P);
            }
        }


        public void update()
        {

            if (T_ScoreChgMoney)
            {
                ScoreChgMoney.update();
                return;
            }

            if (TimeTemp>Time)
            {
                if (group != MAXGROUP)
                {
                    group++;
                    TimeTemp = 0;
                }
                else
                {
                    //下一關判斷式  (腳色沒死亡 才算過關)
                    if (!GamePage.R_HERO.dead && Monsters.Count == 0)
                    {
                        GamePage.R_MFired.clear();//清除子彈
                        ScoreChgMoney = new SCORE(GamePage.R_BAR.Score, GamePage.HERO_Money + GamePage.HERO_Money2);
                        GamePage.HERO_Money2 = 0;//清除暫存分數
                        T_ScoreChgMoney=true;//啟動計分看板
                    }
                }
            }else{
                //若腳色沒死 才繼續出怪
                if (!GamePage.R_HERO.dead)
                {
                    if(!BossTime())
                        TimeTemp++;
                }
            }

            for (int i = 0; i < Monsters.Count;i++ )
            {
                Monsters[i].update();

                if(!Monsters[i].life()){
                    Monsters.RemoveAt(i);
                }
            }
        }


        public int group{
            get
            {
                    return GROUP;
            }

            set
            {
                GROUP = value;
                Monsters.AddRange(L.getMonster(GROUP));
                Time = L.getNextTime;
                

                //困難程度
                if (GamePage.HERO_S >= 2)
                {
                    if (GamePage.HERO_LV >= 7)
                    {
                        if (GamePage.HERO_LV >= 13)
                        {
                            L.R2(GamePage.randObj.Next(0, 3));
                            L.R3(GamePage.randObj.Next(0, 5));
                        }
                        else
                        {
                            L.R3(GamePage.randObj.Next(0, 7));
                        }
                    }
                    else
                    {
                        L.R3(GamePage.randObj.Next(0, 5));
                    }
                }
            }
        }


        public int getGP()
        {
            //接近魔王關可以-3 
            if (MAXGROUP - GROUP <= 2)
            {
                return GROUP - 3;
            }


            //飛接近魔王關-2
            if (GROUP <= 2)
            {
                return 0;
            }
            else
            {
                return GROUP - 2;
            }
        }

        public int setLvNum
        {
            set
            {
                LvNum = value;


                if (LvNum == 1)
                {
                    L = new LV1();
                }
                else if (LvNum == 2)
                {
                    L = new LV2();
                }
                else if (LvNum == 3)
                {
                    L = new LV3();
                }
                else if (LvNum == 4)
                {
                    L = new LV4();
                }
                else if (LvNum == 5)
                {
                    L = new LV5();
                }
                else if (LvNum == 6)
                {
                    L = new LV6();
                }
                else if (LvNum == 7)
                {
                    L = new LV7();
                }
                else if (LvNum == 8)
                {
                    L = new LV8();
                }
                else if (LvNum == 9)
                {
                    L = new LV9();
                }
                else if (LvNum == 10)
                {
                    L = new LV10();
                }
                else if (LvNum == 11)
                {
                    L = new LV11();
                }
                else if (LvNum == 12)
                {
                    L = new LV12();
                }
                else if (LvNum == 13)
                {
                    L = new LV13();
                }
                else if (LvNum == 14)
                {
                    L = new LV14();
                }
                else if (LvNum == 15)
                {
                    L = new LV15();
                }
                else if (LvNum == 16)
                {
                    L = new LV16();
                }
                else if (LvNum == 17)
                {
                    L = new LV17();
                }
                else if (LvNum == 18)
                {
                    L = new LV18();
                }
                else if (LvNum == 19)
                {
                    L = new LV19();
                }
                else if (LvNum == 20)
                {
                    L = new LV20();
                }
                else if (LvNum == 21)
                {
                    L = new LV21();
                }
                else if (LvNum == 22)
                {
                    L = new LV22();
                }



                MAXGROUP = L.getGROUP;
                // Time = L.getNextTime;取消從lv1,lv2取得的第一波攻擊
            }
        }




        //英雄被打到怪扣寫英雄也扣血 ＊回傳計算英雄要扣多少血量
        public int HPlossX(BoundingSphere H, int loss)
        {
            int r = 0;
            for (int i = 0; i < Monsters.Count; i++)
            {
                if (Monsters[i].H.Intersects(H))
                {

                    r=Monsters[i].hp;
                    if (r > 150)
                    {
                        r = 3;
                    }
                    else if (r <= 150 && r > 30)
                    {
                        r = 2;
                    }else{
                        r = 1;
                    }

                    Monsters[i].hp -= loss;

                    return r;
                }
            }
            return r;//沒被擊中
        }


        /* 單一子彈發射判定 已取消
        //怪是否被子彈打到..  
        public bool HPloss(BoundingSphere H, int loss)
        {

            for (int i = 0; i < Monsters.Count;i++)
            {
                if (Monsters[i].H.Intersects(H))
                {
                    Monsters[i].hp -= loss;
                    GamePage.R_BAR.addScore(10);
                    return true;
                }
            }
            return false;//沒被擊中
        }
        */


        //怪是否被打到子彈..若被打到怪扣寫且子彈消失
        public bool[] HPloss(BoundingSphere[] H, int loss)
        {
            bool[] R = new bool[H.Length+1];
            bool f=false;

            //＊＊＊＊＊＊＊＊＊＊＊＊
            //若是主要攻擊 攻擊力就+2
            if (H.Length == 1 || H.Length % 2 == 0)
                loss+=2;
            //＊＊＊＊＊＊＊＊＊＊＊＊

            if (loss<=0)
            {
                loss = 1;
            }

            for (int i = 0; i < H.Length; i++)
            {
                R[i + 1] = false;
                for (int j = 0; j < Monsters.Count; j++)
                {

                    if (Monsters[j].H.Intersects(H[i]))
                    {
                        Monsters[j].hp -= loss;
                        GamePage.R_BAR.addScore(8 - H.Length);
                        R[i + 1] = true;
                        f = true;
                        break;
                    }
                }//for j
            }//for i
            R[0] = f;
           return R;
        }







        //給BOSS及特殊怪物使用的增加怪物
        public  void addMonster(MONSTER M){
            Monsters.Add(M);
        }
        public void ClearMonster()
        {

            //純脆製造煙火效果
            for (int i = 0; i < Monsters.Count;i++ )
            {
                Monsters[i].hp = 0;
            }

            GamePage.R_MFired.clear();
        }



        public bool BossTime()
        {
            //出的怪中是否有boss
            for (int i = 0; i < Monsters.Count;i++ )
            {
                if (!Monsters[i].Mtypes)
                {
                    return true;
                }
            }
            return false;
        }

        public void allMLoss(int num)
        {
            //英雄使用閃電  10隻怪 都受到損傷
            //魔王只受到3分之2的損傷
            int MonN = 9;
            for (int i = 0; i < Monsters.Count;i++ )
            {
                if (Monsters[i].Mtypes)
                {
                    Monsters[i].hp -= num;     
                }
                else
                {
                    Monsters[i].hp -= num-(num/3);  
                }


                MonN--;
                if (MonN<=0)
                {
                    return;
                }
            }
        }



        public int getMlength(){
            return Monsters.Count;
        }
    }
}
