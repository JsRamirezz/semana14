PGDMP                      |            semana14    16.1    16.1 S               0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    42514    semana14    DATABASE     �   CREATE DATABASE semana14 WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_El Salvador.1252';
    DROP DATABASE semana14;
                postgres    false            �            1259    42581    carts    TABLE     �   CREATE TABLE public.carts (
    id bigint NOT NULL,
    nombre_servicio character varying(255) NOT NULL,
    precio double precision NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.carts;
       public         heap    postgres    false            �            1259    42580    carts_id_seq    SEQUENCE     u   CREATE SEQUENCE public.carts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.carts_id_seq;
       public          postgres    false    229                       0    0    carts_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.carts_id_seq OWNED BY public.carts.id;
          public          postgres    false    228            �            1259    42606    citas    TABLE       CREATE TABLE public.citas (
    id bigint NOT NULL,
    id_servicio bigint NOT NULL,
    id_estilistas bigint NOT NULL,
    fecha date NOT NULL,
    hora time(0) without time zone NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.citas;
       public         heap    postgres    false            �            1259    42605    citas_id_seq    SEQUENCE     u   CREATE SEQUENCE public.citas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.citas_id_seq;
       public          postgres    false    235                        0    0    citas_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.citas_id_seq OWNED BY public.citas.id;
          public          postgres    false    234            �            1259    42597 
   estilistas    TABLE       CREATE TABLE public.estilistas (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    telefono character varying(255) NOT NULL,
    correo character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.estilistas;
       public         heap    postgres    false            �            1259    42596    estilistas_id_seq    SEQUENCE     z   CREATE SEQUENCE public.estilistas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.estilistas_id_seq;
       public          postgres    false    233            !           0    0    estilistas_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.estilistas_id_seq OWNED BY public.estilistas.id;
          public          postgres    false    232            �            1259    42541    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    42540    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    221            "           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    220            �            1259    42516 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    42515    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    216            #           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    215            �            1259    42533    password_reset_tokens    TABLE     �   CREATE TABLE public.password_reset_tokens (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 )   DROP TABLE public.password_reset_tokens;
       public         heap    postgres    false            �            1259    42553    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         heap    postgres    false            �            1259    42552    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public          postgres    false    223            $           0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public          postgres    false    222            �            1259    42588 	   servicios    TABLE     $  CREATE TABLE public.servicios (
    id bigint NOT NULL,
    nombre_servicio character varying(255) NOT NULL,
    descripcion character varying(255) NOT NULL,
    precio double precision NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.servicios;
       public         heap    postgres    false            �            1259    42587    servicios_id_seq    SEQUENCE     y   CREATE SEQUENCE public.servicios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.servicios_id_seq;
       public          postgres    false    231            %           0    0    servicios_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.servicios_id_seq OWNED BY public.servicios.id;
          public          postgres    false    230            �            1259    42572    tblarticulos    TABLE     �   CREATE TABLE public.tblarticulos (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    caracteristicas character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
     DROP TABLE public.tblarticulos;
       public         heap    postgres    false            �            1259    42571    tblarticulos_id_seq    SEQUENCE     |   CREATE SEQUENCE public.tblarticulos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.tblarticulos_id_seq;
       public          postgres    false    227            &           0    0    tblarticulos_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.tblarticulos_id_seq OWNED BY public.tblarticulos.id;
          public          postgres    false    226            �            1259    42565    tblproductos    TABLE       CREATE TABLE public.tblproductos (
    id bigint NOT NULL,
    articulo character varying(255) NOT NULL,
    cantidad numeric(8,2) NOT NULL,
    existencias integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
     DROP TABLE public.tblproductos;
       public         heap    postgres    false            �            1259    42564    tblproductos_id_seq    SEQUENCE     |   CREATE SEQUENCE public.tblproductos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.tblproductos_id_seq;
       public          postgres    false    225            '           0    0    tblproductos_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.tblproductos_id_seq OWNED BY public.tblproductos.id;
          public          postgres    false    224            �            1259    42523    users    TABLE     x  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    42522    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    218            (           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    217            R           2604    42584    carts id    DEFAULT     d   ALTER TABLE ONLY public.carts ALTER COLUMN id SET DEFAULT nextval('public.carts_id_seq'::regclass);
 7   ALTER TABLE public.carts ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    228    229    229            U           2604    42609    citas id    DEFAULT     d   ALTER TABLE ONLY public.citas ALTER COLUMN id SET DEFAULT nextval('public.citas_id_seq'::regclass);
 7   ALTER TABLE public.citas ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    235    234    235            T           2604    42600    estilistas id    DEFAULT     n   ALTER TABLE ONLY public.estilistas ALTER COLUMN id SET DEFAULT nextval('public.estilistas_id_seq'::regclass);
 <   ALTER TABLE public.estilistas ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    232    233    233            M           2604    42544    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    221    221            K           2604    42519    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    215    216            O           2604    42556    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    222    223    223            S           2604    42591    servicios id    DEFAULT     l   ALTER TABLE ONLY public.servicios ALTER COLUMN id SET DEFAULT nextval('public.servicios_id_seq'::regclass);
 ;   ALTER TABLE public.servicios ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    231    230    231            Q           2604    42575    tblarticulos id    DEFAULT     r   ALTER TABLE ONLY public.tblarticulos ALTER COLUMN id SET DEFAULT nextval('public.tblarticulos_id_seq'::regclass);
 >   ALTER TABLE public.tblarticulos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    227    226    227            P           2604    42568    tblproductos id    DEFAULT     r   ALTER TABLE ONLY public.tblproductos ALTER COLUMN id SET DEFAULT nextval('public.tblproductos_id_seq'::regclass);
 >   ALTER TABLE public.tblproductos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    225    224    225            L           2604    42526    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    218    218                      0    42581    carts 
   TABLE DATA           T   COPY public.carts (id, nombre_servicio, precio, created_at, updated_at) FROM stdin;
    public          postgres    false    229   �a                 0    42606    citas 
   TABLE DATA           d   COPY public.citas (id, id_servicio, id_estilistas, fecha, hora, created_at, updated_at) FROM stdin;
    public          postgres    false    235   b                 0    42597 
   estilistas 
   TABLE DATA           Z   COPY public.estilistas (id, nombre, telefono, correo, created_at, updated_at) FROM stdin;
    public          postgres    false    233   xb       
          0    42541    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    221   �b                 0    42516 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    216   c                 0    42533    password_reset_tokens 
   TABLE DATA           I   COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
    public          postgres    false    219   �c                 0    42553    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
    public          postgres    false    223   d                 0    42588 	   servicios 
   TABLE DATA           e   COPY public.servicios (id, nombre_servicio, descripcion, precio, created_at, updated_at) FROM stdin;
    public          postgres    false    231   d                 0    42572    tblarticulos 
   TABLE DATA           [   COPY public.tblarticulos (id, nombre, caracteristicas, created_at, updated_at) FROM stdin;
    public          postgres    false    227   vd                 0    42565    tblproductos 
   TABLE DATA           c   COPY public.tblproductos (id, articulo, cantidad, existencias, created_at, updated_at) FROM stdin;
    public          postgres    false    225   �d                 0    42523    users 
   TABLE DATA           u   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    218   �d       )           0    0    carts_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.carts_id_seq', 1, true);
          public          postgres    false    228            *           0    0    citas_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.citas_id_seq', 10, true);
          public          postgres    false    234            +           0    0    estilistas_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.estilistas_id_seq', 3, true);
          public          postgres    false    232            ,           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    220            -           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 10, true);
          public          postgres    false    215            .           0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public          postgres    false    222            /           0    0    servicios_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.servicios_id_seq', 3, true);
          public          postgres    false    230            0           0    0    tblarticulos_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.tblarticulos_id_seq', 1, false);
          public          postgres    false    226            1           0    0    tblproductos_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.tblproductos_id_seq', 2, true);
          public          postgres    false    224            2           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 1, false);
          public          postgres    false    217            l           2606    42586    carts carts_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.carts
    ADD CONSTRAINT carts_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.carts DROP CONSTRAINT carts_pkey;
       public            postgres    false    229            r           2606    42611    citas citas_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.citas
    ADD CONSTRAINT citas_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.citas DROP CONSTRAINT citas_pkey;
       public            postgres    false    235            p           2606    42604    estilistas estilistas_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.estilistas
    ADD CONSTRAINT estilistas_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.estilistas DROP CONSTRAINT estilistas_pkey;
       public            postgres    false    233            _           2606    42549    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    221            a           2606    42551 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    221            W           2606    42521    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    216            ]           2606    42539 0   password_reset_tokens password_reset_tokens_pkey 
   CONSTRAINT     q   ALTER TABLE ONLY public.password_reset_tokens
    ADD CONSTRAINT password_reset_tokens_pkey PRIMARY KEY (email);
 Z   ALTER TABLE ONLY public.password_reset_tokens DROP CONSTRAINT password_reset_tokens_pkey;
       public            postgres    false    219            c           2606    42560 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public            postgres    false    223            e           2606    42563 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public            postgres    false    223            n           2606    42595    servicios servicios_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.servicios
    ADD CONSTRAINT servicios_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.servicios DROP CONSTRAINT servicios_pkey;
       public            postgres    false    231            j           2606    42579    tblarticulos tblarticulos_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.tblarticulos
    ADD CONSTRAINT tblarticulos_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.tblarticulos DROP CONSTRAINT tblarticulos_pkey;
       public            postgres    false    227            h           2606    42570    tblproductos tblproductos_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.tblproductos
    ADD CONSTRAINT tblproductos_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.tblproductos DROP CONSTRAINT tblproductos_pkey;
       public            postgres    false    225            Y           2606    42532    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    218            [           2606    42530    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    218            f           1259    42561 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public            postgres    false    223    223            s           2606    42617 !   citas citas_id_estilistas_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.citas
    ADD CONSTRAINT citas_id_estilistas_foreign FOREIGN KEY (id_estilistas) REFERENCES public.estilistas(id) ON DELETE CASCADE;
 K   ALTER TABLE ONLY public.citas DROP CONSTRAINT citas_id_estilistas_foreign;
       public          postgres    false    233    4720    235            t           2606    42612    citas citas_id_servicio_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.citas
    ADD CONSTRAINT citas_id_servicio_foreign FOREIGN KEY (id_servicio) REFERENCES public.servicios(id) ON DELETE CASCADE;
 I   ALTER TABLE ONLY public.citas DROP CONSTRAINT citas_id_servicio_foreign;
       public          postgres    false    231    235    4718               4   x�3�t�/*IUHIUHJ,JJ�4�4202�50"Cs+3+slb\1z\\\ �z�         K   x�m̱�@�:���Q����s@�^q����=F(K�m腭J��g�_�aS�J��~-L?Vw?���         `   x�3��*M��4426�553���rR�K2s2�K���s9c���ˈ�9�('����T���6,�U�1�ob^ij�9H����g.X ��=... 3l(�      
      x������ � �         �   x�]��n� ���16I���$�ObC��d��9�ix��\.6\��@`	����P�W�U�U?'���#���"��,TX�R��|�A�od'��৏���s�Óo%ÓC����O�C`�sѨI��HVG �'�%/k����ɏZ۽/5�5�{�0�sc���.�&Q'}w�;��!�g���ݎYjLQ��왻��������,��            x������ � �            x������ � �         G   x�3�t�/*IUHIUHNLJ����0��".#�TRbQR":�Θ3 �(-3'1%lLjV"��=... )�(�            x������ � �         W   x�3�tN-JT(H�9
ɉI�99���z���F�FF&�f�F
F�V��VƦ�ĸ���pꙡj3S04�25�25�&����� �jB            x������ � �     