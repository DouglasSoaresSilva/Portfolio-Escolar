// Dados da banda - em um projeto real viriam de uma API,
// aqui deixamos fixo para facilitar o estudo de map + props
const ALBUNS = [
  {
    id: 1,
    titulo: 'Hybrid Theory',
    ano: 2000,
    descricao: 'Álbum de estreia. Mistura nu-metal, rap e eletrônica. Um dos mais vendidos dos anos 2000.',
    musicas: [
      'Papercut',
      'One Step Closer',
      'With You',
      'Points of Authority',
      'Crawling',
      'Runaway',
      'By Myself',
      'In the End',
      'A Place for My Head',
      'Forgotten',
      'Cure for the Itch',
      'Pushing Me Away',
    ],
  },
  {
    id: 2,
    titulo: 'Meteora',
    ano: 2003,
    descricao: 'Continuação direta do Hybrid Theory. Mais pesado e melódico. Nome inspirado nas rochas da Grécia.',
    musicas: [
      'Foreword',
      "Don't Stay",
      'Somewhere I Belong',
      'Lying from You',
      'Hit the Floor',
      'Easier to Run',
      'Faint',
      'Figure.09',
      'Breaking the Habit',
      'From the Inside',
      "Nobody's Listening",
      'Session',
      'Numb',
    ],
  },
  {
    id: 3,
    titulo: 'Minutes to Midnight',
    ano: 2007,
    descricao: 'Virada para o rock alternativo. Produzido por Rick Rubin. Traz os hits What I’ve Done e Bleed It Out.',
    musicas: [
      'Wake',
      'Given Up',
      'Leave Out All the Rest',
      'Bleed It Out',
      'Shadow of the Day',
      "What I've Done",
      'Hands Held High',
      'No More Sorrow',
      "Valentine's Day",
      'In Between',
      'In Pieces',
      'The Little Things Give You Away',
    ],
  },
  {
    id: 4,
    titulo: 'A Thousand Suns',
    ano: 2010,
    descricao: 'Álbum conceitual sobre guerra nuclear. Bem eletrônico e experimental.',
    musicas: [
      'Burning in the Skies',
      'When They Come for Me',
      'Waiting for the End',
      'Blackout',
      'Wretches and Kings',
      'Iridescent',
      'The Catalyst',
    ],
  },
  {
    id: 5,
    titulo: 'Living Things',
    ano: 2012,
    descricao: 'Mistura o eletrônico do A Thousand Suns com o peso dos primeiros álbuns.',
    musicas: [
      'Lost in the Echo',
      'In My Remains',
      'Burn It Down',
      'Lies Greed Misery',
      "I'll Be Gone",
      'Castle of Glass',
      'Powerless',
    ],
  },
  {
    id: 6,
    titulo: 'The Hunting Party',
    ano: 2014,
    descricao: 'Retorno ao rock pesado, com guitarras agressivas e participações (Daron Malakian, Tom Morello).',
    musicas: [
      'Keys to the Kingdom',
      'All for Nothing',
      'Guilty All the Same',
      'War',
      'Wastelands',
      "Until It's Gone",
      'Final Masquerade',
    ],
  },
  {
    id: 7,
    titulo: 'One More Light',
    ano: 2017,
    descricao: 'Álbum mais pop da banda. Último com Chester Bennington nos vocais.',
    musicas: [
      'Nobody Can Save Me',
      'Good Goodbye',
      'Talking to Myself',
      'Battle Symphony',
      'Invisible',
      'One More Light',
      'Sharp Edges',
    ],
  },
  {
    id: 8,
    titulo: 'From Zero',
    ano: 2024,
    descricao: 'Retorno após hiato, com Emily Armstrong nos vocais e Colin Brittain na bateria.',
    musicas: [
      'From Zero (Intro)',
      'The Emptiness Machine',
      'Cut the Bridge',
      'Heavy Is the Crown',
      'Over Each Other',
      'Casualty',
      'Overflow',
      'Two Faced',
      'Stained',
      'IGYEIH',
      'Good Things Go',
    ],
  },
]

import { useState } from 'react'
import './App.css'

// Cabeçalho da página
function Cabecalho({ totalAlbuns, totalMusicas, totalFavoritas }) {
  return (
    <header className="lp-topo">
      <p className="lp-tag">EST. 1996 • CALIFÓRNIA • NU-METAL / ROCK ALTERNATIVO</p>
      <h1 className="lp-logo">LINKIN PARK</h1>
      <p className="lp-sub">
        Discografia interativa feita em React — {totalAlbuns} álbuns • {totalMusicas} músicas • {totalFavoritas} favoritas
      </p>
    </header>
  )
}

// Cartão de cada álbum. Recebe dados por props.
function AlbumCard({ album, aberto, onAlternar, favoritas, onFavoritar }) {
  return (
    <article className={`lp-album ${aberto ? 'aberto' : ''}`}>
      {/* Clicar no topo abre/fecha a lista de músicas */}
      <button className="lp-album-topo" onClick={() => onAlternar(album.id)}>
        <div className="lp-capa" aria-hidden="true">
          {/* Iniciais do álbum como "capa" feita em CSS */}
          <span>{album.titulo.split(' ').map((p) => p[0]).slice(0, 2).join('')}</span>
        </div>

        <div className="lp-album-info">
          <h2>{album.titulo}</h2>
          <p className="lp-ano">{album.ano} • {album.musicas.length} faixas</p>
          <p className="lp-desc">{album.descricao}</p>
        </div>

        <span className="lp-seta">{aberto ? '▲' : '▼'}</span>
      </button>

      {/* Só mostra as músicas se o álbum estiver aberto */}
      {aberto && (
        <ol className="lp-faixas">
          {album.musicas.map((musica, i) => {
            const chave = `${album.id}-${musica}`
            const ehFavorita = favoritas.includes(chave)
            return (
              <li key={chave} className="lp-faixa">
                <span className="lp-num">{String(i + 1).padStart(2, '0')}</span>
                <span className="lp-nome">{musica}</span>
                <button
                  className={`lp-fav ${ehFavorita ? 'ativa' : ''}`}
                  onClick={() => onFavoritar(chave)}
                  title={ehFavorita ? 'Remover dos favoritos' : 'Adicionar aos favoritos'}
                >
                  {ehFavorita ? '★' : '☆'}
                </button>
              </li>
            )
          })}
        </ol>
      )}
    </article>
  )
}

function App() {
  // Texto digitado na busca
  const [busca, setBusca] = useState('')
  // Qual álbum está expandido (id). Começa com o primeiro aberto.
  const [albumAberto, setAlbumAberto] = useState(1)
  // Lista de músicas favoritadas. A chave é "idAlbum-nomeMusica"
  const [favoritas, setFavoritas] = useState([])

  // Abre/fecha: se clicar no que já está aberto, fecha (null)
  function alternarAlbum(id) {
    setAlbumAberto((atual) => (atual === id ? null : id))
  }

  // Adiciona ou remove uma música dos favoritos
  function alternarFavorita(chave) {
    setFavoritas((atual) =>
      atual.includes(chave)
        ? atual.filter((f) => f !== chave)
        : [...atual, chave]
    )
  }

  // Filtro: procura no título do álbum OU no nome da música
  const termo = busca.toLowerCase().trim()
  const albunsFiltrados = ALBUNS.map((album) => {
    if (!termo) return { ...album, musicasFiltradas: album.musicas }

    const bateAlbum = album.titulo.toLowerCase().includes(termo) || String(album.ano).includes(termo)
    const musicasFiltradas = album.musicas.filter((m) => m.toLowerCase().includes(termo))

    // Mostra o álbum se o nome bateu OU se alguma música bateu
    if (bateAlbum) return { ...album, musicasFiltradas: album.musicas }
    if (musicasFiltradas.length > 0) return { ...album, musicasFiltradas }
    return null
  }).filter(Boolean)

  const totalMusicas = ALBUNS.reduce((soma, a) => soma + a.musicas.length, 0)

  return (
    <div className="lp-tela">
      <Cabecalho
        totalAlbuns={ALBUNS.length}
        totalMusicas={totalMusicas}
        totalFavoritas={favoritas.length}
      />

      {/* Barra de busca + botões rápidos */}
      <div className="lp-controles">
        <input
          className="lp-busca"
          type="search"
          placeholder="Buscar álbum ou música... ex: Numb, 2003, Catalyst"
          value={busca}
          onChange={(e) => setBusca(e.target.value)}
        />
        <div className="lp-acoes">
          <button onClick={() => setAlbumAberto(null)}>Fechar todos</button>
          <button onClick={() => { setBusca(''); setFavoritas([]) }}>Limpar</button>
        </div>
      </div>

      {/* Lista de álbuns */}
      <main className="lp-lista">
        {albunsFiltrados.length === 0 && (
          <p className="lp-vazio">Nenhum álbum ou música encontrado para “{busca}”.</p>
        )}

        {albunsFiltrados.map((album) => (
          <AlbumCard
            key={album.id}
            // Se houve filtro por música, mostra só as filtradas
            album={{ ...album, musicas: album.musicasFiltradas ?? album.musicas }}
            aberto={termo ? true : albumAberto === album.id}
            onAlternar={alternarAlbum}
            favoritas={favoritas}
            onFavoritar={alternarFavorita}
          />
        ))}
      </main>

      <footer className="lp-rodape">
        <p>
          Feito com <code>useState</code> + <code>map</code> + <code>props</code> em React • Aula PW2
        </p>
        <p className="lp-credito">Dados resumidos para estudo — discografia oficial tem EPs, remixes e edições deluxe.</p>
      </footer>
    </div>
  )
}

export default App
