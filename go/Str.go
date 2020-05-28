package 

type Str struct {
    /* 要处理的字符串内容 */
    Value string

    /* 获取最后一个字符串 */
    LastChar string

}

func NewStr(Value string,LastChar string) *Str{
    var this = new(Str)
    this.SetValue(Value);
    this.SetLastChar(LastChar);
    return this
}

func (this *Str)GetValue() string{
    return this.Value;
}

func (this *Str)SetValue(Value string) *Str{
    this.Value = Value;
    return this
}
func (this *Str)GetLastChar() string{
    return this.LastChar;
}

func (this *Str)SetLastChar(LastChar string) *Str{
    this.LastChar = LastChar;
    return this
}

/**
    */
func (this *Str)__toString()string{

}

/**
    根据指定的字符串,砍成数组对象,注意:会去掉空内容*/
func (this *Str)Split(delimiter string){

}

/**
    字符串替换*/
func (this *Str)Strtr(newvar string,oldvar string)string{

}
func (this *Str)Strtr_this(newvar string,oldvar string) *Str{
    this.Strtr(newvar,oldvar);
    return this;
}

/**
    首字母大写*/
func (this *Str)Ucfirst()string{

}
func (this *Str)Ucfirst_this() *Str{
    this.Ucfirst();
    return this;
}

/**
    首字母小写*/
func (this *Str)Lcfirst()string{

}
func (this *Str)Lcfirst_this() *Str{
    this.Lcfirst();
    return this;
}

/**
    从指定索引开始砍字符串*/
func (this *Str)Substr(Index int,Length )string{

}
func (this *Str)Substr_this(Index int,Length ) *Str{
    this.Substr(Index,Length);
    return this;
}

/**
    是否包含另外一个字符串*/
func (this *Str)Strpos(Compare_String string)bool{

}

/**
    返回指定索引的那个字符,从0开始数起*/
func (this *Str)One_Str_by_Index(Index int)string{

}

/**
    变成小写*/
func (this *Str)Lowercase()string{

}
func (this *Str)Lowercase_this() *Str{
    this.Lowercase();
    return this;
}

