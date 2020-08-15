using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using TARY_Library;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
namespace hero
{
    public interface MONSTER_IF
    {
        void Draw(SpriteBatch P);
        void update();
        bool life();
        BoundingSphere H { get; }//怪物感應器
        int hp { set; get; }//怪物血 (能被擊中幾次)
        int Score { set; get; }//擊敗怪物得分數

        bool Mtypes{get;}
        float Width { get; }
        float Height { get; }

        float X { get; set; }
        float Y { get; set; }
    }
}
