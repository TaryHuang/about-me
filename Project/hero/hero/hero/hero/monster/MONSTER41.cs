using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MONSTER41 : MONSTER
    {
        public Vector2 targetLoc;
        public int n;//何時觸發時間點
        public int Rn = 0, Rn2 = 0;
        public TARY_RANDOM randObj;
        public int MinY, MaxY;
        public int Nmin = 200, Nmax = 300;//多久發射

        public MONSTER41(Vector2 loc) : base(loc)
        {
            V = new TARY_VIMG(GamePage.picMONSTER41_D, loc);
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 51;//擊倒分數
            HP = 8;//怪物血量
            ADD_X = 0;//物件位移
            ADD_Y = 2f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            randObj = GamePage.randObj;
            n = 50; //前進多少 才開始觸發事件

            Nmin = 200;//發射延遲時間最少
            Nmax = 300;//發射延遲時間最多


            MinY = 0;//飄移最小值
            MaxY = 300;//飄移最大值
        }


        public override void update()
        {
            //飄移怪物 血厚為防禦型怪獸  具備攻擊子彈功能 對準英雄發射

            BOB_update();
            if (Dead) {return;}


            if (Y <= n)
            {
                Y+=ADD_Y;
                return;
            }
            else
            {
                n = 0;
            }


            Rn--;
            if (Rn <= 0)
            {
                firedX();
                setTarget();
            }


            X += (targetLoc.X - X) / Rn2;
            Y += (targetLoc.Y - Y) / Rn2;

        }




        public virtual void setTarget()
        {
            
            targetLoc = new Vector2(randObj.Next(-20, (int)(480)), randObj.Next(MinY, MaxY));
            Rn = randObj.Next(Nmin, Nmax);
            Rn2 = Rn;

        }





        public override void Event_lossHP()
        {
            setTarget();
        }



        public override void Event_Dead()
        {

            //20分之1的機率有東西領
            if (GamePage.randObj.Next(0, 20) == 0)
                GamePage.R_MonsterThg.Add(new OnePiece(new Vector2(V.X, V.Y)));

        }
    }
}
